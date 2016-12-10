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
	'admin/product/new' => 'admin/sanpham/create',
	'admin/product' => array('admin/sanpham', 'name' => 'admin_sanpham'),
	'admin/product/search' => array('admin/sanpham/search','name' => 'admin_sanpham_index'),
	'admin/product/search/(:category)' => array('admin/sanpham/show_by_category/$1','name' => 'admin_sanpham_show_by_category'),
	'admin/sanpham/delete/(:any)' => 'admin/sanpham/delete/$1',

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
	'sanpham/add_to_cart/(:any)' => 'sanpham/addcart/$1',
	'sanpham' => 'sanpham/index',
	// category
	'category/samsung'   => 'sanpham/samsung',
	'category/sony'      => 'sanpham/sony',
	'category/lg'        => 'sanpham/lg',
	'category/iphone'    => 'sanpham/iphone',
	'category/backbarry' => 'sanpham/backbarry',
	'product' => 'category/index',
	'product/(:any)' => 'sanpham/search/$1', 
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
);