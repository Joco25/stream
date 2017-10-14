import VueRouter from 'vue-router';

let routes =[
	{
		path: '/',
		component: require('./views/home')
	},
	{
		path: '/about',
		component: require('./views/about')
	},
	{
		path: '/contact',
		component: require('./views/contact')
	}
];

export default new VueRouter({
	routes,
	linkActiveClass: 'is-active'
})