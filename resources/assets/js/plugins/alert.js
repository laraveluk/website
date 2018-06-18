import Vue from 'vue'

import Notification from '~/components/core/Notification'

const NotificationComponent = Vue.extend(Notification)

const openNotification = (propsData = {
    title: '',
    message: '',
    type: '',
    direction: '',
    duration: 1000,
    container: '.notifications'
}) => {
    return new NotificationComponent({
        el: document.createElement('div'),
        propsData
    })
}

class Alert {
    static success(message) {
        openNotification({
            title: 'Success!',
            message: message,
            type: 'bg-green'
        })
    }

    static error(message) {
        openNotification({
            title: 'Error!',
            message: message,
            type: 'bg-red-light'
        })
    }
}

export default Alert
