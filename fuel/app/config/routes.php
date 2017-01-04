<?php
return array(
	'_root_'        => 'blog/index',  // The default route
	'_404_'         => 'welcome/404',    // The main 404 route
	'admin'         => 'admin/index',
	'admin/index' => 'admin/index',
	'admin/logout' => 'admin/logout',
	'admin/profile/$1' => 'admin/profile/$1',
	'admin/service/store' => 'admin/gioithieu/index',
	'admin/service/contact' => 'admin/lienhe/index',
	'admin/service/review' => 'admin/posts/index',
	'admin/product' => array('admin/product', 'name' => 'admin_product'),
	'admin/product/search' => array('admin/product/search','name' => 'admin_product_index'),
	'admin/product/search/(:category)' => array('admin/product/show_by_category/$1','name' => 'admin_product_show_by_category'),
	'admin/product/delete/(:any)' => 'admin/product/delete/$1',
	'admin/product/last' => 'admin/product/last',
	'admin/user/view/(:any)' => 'admin/user/thongtin/$1',
	'admin/user/delete/(:any)' => 'admin/user/delete/$1',
	'admin/user/edit/(:any)' => 'admin/user/edit/$1',
	'admin/price/create' => 'admin/price/create',
	'admin/user' => 'admin/user/index',	
	'admin/order' => 'admin/order/index',
	'admin/order/(:any)' => 'admin/order/confirm/$1',

	// user
	'user/thongtin' => 'user/thongtin',
	'user/update'   => 'user/edit',
	'dangnhap'       => 'user/login',
	'register'      => 'register/index',
	'register/create' => 'register/create',
	// san pham //
	'home/add-to-cart/(:any)' => 'cart/add/$1',
	'product/add-to-cart/(:any)' => 'product/addcart/$1',
	'product' => 'product/index',
	// category
	'category/samsung'   => 'product/samsung',
	'category/sony'      => 'product/sony',
	'category/lg'        => 'product/lg',
	'category/iphone'    => 'product/iphone',
	'category/backbarry' => 'product/backbarry',
	'product' => 'product/index',

	'product/search/(:any)' => 'product/search/$1', 
	// service lien he ///
	'home'           => 'blog/index',
	'store'      => 'service/gioithieu',
	'review'         => 'service/tintuc',
	'contact'         => 'service/lienhe',
	'category'		=> 'category/index',
	// 'checkout' => 'checkout/index',
	'add-to-cart/(:any)' => 'cart/addcart/$1',
	'category/add-to-cart/(:any)' => 'category/addcart/$1',
	'checkout' => 'checkout/index',
	'checkout/create' => 'checkout/create', 
	'user/checkout' => 'user/checkout/index',
	'user/order' => 'user/checkout/order',
	'user/order/(:any)' => 'user/checkout/delete/$1',

	'user/checkout/create' => 'user/checkout/create',
	'cart/delete/(:any)' => 'cart/delete/$1',
	'cart/deleteall' => 'cart/delete_all',
);