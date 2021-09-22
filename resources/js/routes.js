const Welcome = () => import('./components/Welcome.vue' /* webpackChunkName: "resource/js/components/welcome" */)
const ModelList = () => import('./components/qdcmodel/List.vue' /* webpackChunkName: "resource/js/components/category/list" */)
const ModelCreate = () => import('./components/qdcmodel/Add.vue' /* webpackChunkName: "resource/js/components/category/add" */)
const ModelEdit = () => import('./components/qdcmodel/Edit.vue' /* webpackChunkName: "resource/js/components/category/edit" */)

const DqcList = () => import('./components/dqc/List.vue' /* webpackChunkName: "resource/js/components/category/list" */)
const DqcCreate = () => import('./components/dqc/Add.vue' /* webpackChunkName: "resource/js/components/category/add" */)
const DqcEdit = () => import('./components/dqc/Edit.vue' /* webpackChunkName: "resource/js/components/category/edit" */)

const Dqc841List = () => import('./components/dqc841/List.vue' /* webpackChunkName: "resource/js/components/category/list" */)
const Dqc841Create = () => import('./components/dqc841/Add.vue' /* webpackChunkName: "resource/js/components/category/add" */)
const Dqc841Edit = () => import('./components/dqc841/Edit.vue' /* webpackChunkName: "resource/js/components/category/edit" */)


export const routes = [
    {
        name: 'home',
        path: '/',
        component: Welcome
    },


    {
        name: 'modelList',
        path: '/model',
        component: ModelList
    },
    {
        name: 'modelEdit',
        path: '/model/:id/edit',
        component: ModelEdit
    },

    {
        name: 'modelAdd',
        path: '/model/add',
        component: ModelCreate
    },


    {
        name: 'dqcList',
        path: '/dqc',
        component: DqcList
    },
    {
        name: 'dqcEdit',
        path: '/dqc/:id/edit',
        component: DqcEdit
    },
    {
        name: 'dqcAdd',
        path: '/dqc/add',
        component: DqcCreate
    },


    {
        name: 'dqc841List',
        path: '/dqc841',
        component: Dqc841List
    },
    {
        name: 'dqc841Edit',
        path: '/dqc841/:id/edit',
        component: Dqc841Edit
    },

    {
        name: 'dqc841Add',
        path: '/dqc841/add',
        component: Dqc841Create
    }

]