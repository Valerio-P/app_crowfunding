import { createRouter, createWebHistory } from 'vue-router'

import store from "../store"

// views

import Home from "../views/Home.vue"
import Profile from "../views/Profile.vue"
import Contacts from "../views/Contacts.vue"
import Opportunities from "../views/Opportunities.vue"
import Property from "../views/Property.vue"
import HowItWorks from "../views/HowItWorks.vue"
import Faq from "../views/Faq.vue"

// components

// // profile components

import AccountInfo from "../components/Profile/AccountInfo.vue"
import MyProperties from "../components/Profile/MyProperties.vue"
import Payments from "../components/Profile/Payments.vue"
import Documents from "../components/Profile/Documents.vue"
import Notifications from "../components/Profile/Notifications.vue"

const routes = [{
        path: '/',
        name: 'Home',
        component: Home
    },
    {
        path: '/profile',
        name: 'Profile',
        component: Profile,
        children: [{
                path: '/profile/account-info',
                name: 'Account Info',
                components: {
                    default: AccountInfo
                }
            }, {
                path: '/profile/my-properties',
                name: 'My Properties',
                component: MyProperties
            }, {
                path: '/profile/payments',
                name: 'Payments',
                components: {
                    default: Payments
                }
            },
            {
                path: '/profile/documents',
                name: 'Documents',
                components: {
                    default: Documents
                }
            },
            {
                path: '/profile/notifications',
                name: 'Notifications',
                components: {
                    default: Notifications
                }
            }
        ],
        beforeEnter: (to, from, next) => {

            let auth = store.state.user.data.id

            if (auth) {

                next()

            } else {
                next("/")
            }

        }
    },
    {
        path: '/contacts',
        name: 'Contacts',
        component: Contacts
    },
    {
        path: '/opportunities',
        name: 'Opportunities',
        component: Opportunities
    },
    {
        path: '/opportunity/:id',
        name: 'Property',
        component: Property
    },
    {
        path: '/howitworks',
        name: 'HowItWorks',
        component: HowItWorks
    },
    {
        path: '/faq',
        name: 'Faq',
        component: Faq
    },
]

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
})

export default router