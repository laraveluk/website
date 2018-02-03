## LaravelUK Website Development

### Introduction

Thank you for your interest in contributing to the LaravelUK website project!  

This project is not just a platform for building the LaravelUK website, but also a platform to help other members learn technologies that they are not familiar with; irrespective of their level of experience.

These guidelines ensure that developers are able to quickly give feedback on your contribution and how to make it better. Most probably you might have to go back and change a few things, but it will be in the interest of making this process better for everyone. Please read and understand the contribution guide before creating an issue or pull request..

Happy contributing!

[![Build Status](https://travis-ci.org/laraveluk/website.svg?branch=master)](https://travis-ci.org/laraveluk/website)

### Framework Libraries ###
The following framework and libraries will be used in the project
Laravel
Vue.js
Vuex
VueRouter
Tailwind CSS (You can write vanilla CSS if you want. We will apply these within the build)

### Contribution Instructions
If you are new to contibuting to open source projects, please follow the steps below
- Fork the repository
- Clone the forked repository to your local system
- Add a git remote to the original repository. Example `git remote add upstream https://github.com/laraveluk/website.git`
- Check `git remote -v` to ensure you can see both remotes
- Create a feature branch in which to make your changes `git checkout -b <new branch name>`
- Make changes and commit to the branch
- Push the branch to Github
- Submit Pull request

### Etiquette
As this is a community project, selected reviewers will go through your code to ascertain if the quality is sufficient for it to be merged. You are however free to choose any member of the community to review your code however only specifically assigned members can merge your Pull Requests. Please be considerate towards reviewers/maintainers when raising issues or presenting pull requests. Let's show the world that LaravelUK members are civilized and great people to work with.

## Submission Requirements
Before submitting a pull request:
- Check the codebase to ensure that your feature doesn't already exist.
- Check the pull requests to ensure that another person hasn't already submitted the feature or fix.
- Send coherent history - Make sure each individual commit in your pull request is meaningful. If you had to make multiple intermediate - commits while developing, please [squash] (http://www.git-scm.com/book/en/v2/Git-Tools-Rewriting-History#Changing-Multiple-Commit-Messages) them before submitting.
- It is important to add tests to your functionality, even if it is a very simple feature. If it is a UI change, it will be helpful to add a simple screenshot with a brief note so others will know what has changed
- If you want to do more than one thing, send multiple pull requests.

### Feedback Policy

We will strive for a "Zero Pull Request Pending" policy. This means, that if the pull request is good, it will be merged as soon as review is completed and if it does not meet the requirements, the contributor will be advised to make changes and re-submit.


### Coding Standards
As this is a Laravel application, we will be following the [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) coding standard.
 - Interfaces should NOT be suffixed with Interface, Traits should NOT be suffixed with Trait
 - Class and method names must be descriptive enough with type-hints since we are not enforcing docblocks
 - Ensure that you submit tests that have minimal 100% coverage.