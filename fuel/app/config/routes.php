<?php
return array(
	'_root_'        => 'blog/index',  // The default route
	'_404_'         => 'welcome/404',    // The main 404 route
	'admin'         => 'admin/index',
	'admin/index' => 'admin/index',
	'admin/logout' => 'admin/logout',
	'admin/profile/$1' => 'admin/profile/$1',
	'admin/service/gioithieu' => 'admin/gioithieu/index',
	'admin/service/lienhe' => 'admin/lienhe/index',
	'admin/service/tintuc' => 'admin/posts/index',
	'admin/product' => array('admin/product', 'name' => 'admin_product'),
	'admin/product/search' => array('admin/product/search','name' => 'admin_product_index'),
	'admin/product/search/(:category)' => array('admin/product/show_by_category/$1','name' => 'admin_product_show_by_category'),
	'admin/product/delete/(:any)' => 'admin/product/delete/$1',

	'admin/user/view/(:any)' => 'admin/user/thongtin/$1',
	'admin/user/delete/(:any)' => 'admin/user/delete/$1',
	'admin/price/create' => 'admin/price/create',
	'admin/user' => 'admin/user/index',

	// user
	'user/thongtin' => 'user/thongtin',
	'user/update'   => 'user/edit',
	'dangnhap'       => 'user/login',
	'register'      => 'register/index',
	'register/create' => 'register/create',
	// san pham //
	'home/add_to_cart/(:any)' => 'cart/add/$1',
	'product/add_to_cart/(:any)' => 'product/addcart/$1',
	'product' => 'product/index',
	// category
	'category/samsung'   => 'product/samsung',
	'category/sony'      => 'product/sony',
	'category/lg'        => 'product/lg',
	'category/iphone'    => 'product/iphone',
	'category/backbarry' => 'product/backbarry',
	'product' => 'product/index',
	'product/(:any)' => 'product/search/$1', 
	// service lien he ///
	'home'           => 'blog/index',
	'gioithieu'      => 'service/gioithieu',
	'tintuc'         => 'service/tintuc',
	'lienhe'         => 'service/lienhe',
	'category'		=> 'category/index',
	// chi tiet lien he
	'huongdanmuaonline' => 'service/muaonline',
	'hoidap'            => 'service/hoidap',
	'doitrahang'        => 'service/doitrahang',
	'vanchuyen'         => 'service/vanchuyen',
	// 'checkout' => 'checkout/index',
	'add-to-cart/(:any)' => 'cart/addcart/$1',
	'category/add-to-cart/(:any)' => 'category/addcart/$1',
	'checkout' => 'checkout/index',
	'checkout/create' => 'checkout/create', 
	'user/checkout' => 'user/checkout/index',
	'user/checkout/create' => 'user/checkout/create',
	'cart/delete/(:any)' => 'cart/delete/$1',
);