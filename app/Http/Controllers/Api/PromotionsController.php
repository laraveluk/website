<?php

namespace App\Http\Controllers\Api;

use App\Models\Promotion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PromotionsController extends Controller
{
    /**
     * Allow a promotion to be created
     *
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
      $this->validateRequest($request);

        $promotion = auth()->user()->promotions()->create([
            'user_id' => auth()->user()->id,
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'url' => $request->get("url"),
            'published' => $request->get('published')
        ]);

        return $promotion;
    }

    /**
     * Allow a promotion to be updated.
     *
     * @param Request $request
     * @param Promotion $promotion
     * @return null|static
     */
    public function update(Request $request, Promotion $promotion)
    {
        $this->validateRequest($request);
        $this->authorize('update', $promotion);

        $promotion->update([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'url' => $request->get("url"),
            'published' => $request->get('published')
        ]);

        return $promotion->fresh();
    }

    /**
     * Allow information on a promotion to be fetched
     *
     * @param Promotion $promotion
     * @return Promotion
     */
    public function get(Promotion $promotion)
    {
        return $promotion;
    }

    /**
     * Allow a promotion to be deleted
     *
     * @param Promotion $promotion
     */
    public function delete(Promotion $promotion)
    {
        $this->authorize('delete', $promotion);

        $promotion->delete();

        return;
    }

    /**
     * Validation for requests
     *
     * @param Request $request
     * @return array
     */
    private function validateRequest(Request $request)
    {
        return $this->validate($request, [
            'name' => 'required|max:40',
            'description' => 'required|max:140',
            'url' => 'required|url',
            'published' => 'required|boolean'
        ]);
    }
}
