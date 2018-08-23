<!-- User Info -->
<div class="user-info">
    <div class="image">
        <img src="images/user.png" width="48" height="48" alt="User" />
    </div>
    <div class="info-container">
        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $_SESSION['login']['name'] ?></div>
        <div class="email"><?= $user['email'] ?></div>
        <div class="btn-group user-helper-dropdown">
            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
            <ul class="dropdown-menu pull-right">
                <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="index.php?com=user&act=logout"><i class="material-icons">input</i>Sign Out</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- #User Info -->
<!-- Menu -->
<div class="menu">
    <ul class="list">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
            <a href="index.php">
                <i class="material-icons">home</i>
                <span>Home</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">widgets</i>
                <span>Sản phẩm</span>
            </a>
            <ul class="ml-menu">
                <?= phanquyen_menu('Quản lý danh mục cấp 1', 'news', 'man', 'sanpham') ?>
                <?= phanquyen_menu('Quản lý danh mục cấp 2', 'news', 'man', 'sanpham') ?>
                <?= phanquyen_menu('Quản lý sản phẩm', 'news', 'man', 'sanpham') ?>
                
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">assignment</i>
                <span>Bài viết</span>
            </a>
            <ul class="ml-menu">
                <?= phanquyen_menu('Quản lý danh mục cấp 1', 'news', 'man', 'baiviet') ?>
                <?= phanquyen_menu('Quản lý danh mục cấp 2', 'news', 'man', 'baiviet') ?>
                <?= phanquyen_menu('Quản lý bài viết', 'news', 'man', 'baiviet') ?>
            </ul>
        </li>
        
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">perm_media</i>
                <span>Banner - Quảng cáo</span>
            </a>
            <ul class="ml-menu">
                <?php phanquyen_menu('Cập nhật banner','background','capnhat','banner'); ?>
                <?php phanquyen_menu('Quản lý slider','slider','man_photo','slider'); ?>
                <?php phanquyen_menu('Quản lý đối tác','slider','man_photo','doitac'); ?>
                <?php phanquyen_menu('Quản lý quảng cáo','slider','man_photo','quangcao'); ?>
                <?php phanquyen_menu('Quản lý quảng cáo 2 bên','slider','man_photo','letruot'); ?>
                <?php phanquyen_menu('Cập nhật pupop quảng cáo','background','capnhat','pupop'); ?>
                <?php phanquyen_menu('Cập nhật background','anhnen','capnhat','background'); ?>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">email</i>
                <span>Quản lý Form</span>
            </a>
            <ul class="ml-menu">
                <?php phanquyen_menu('Quản lý Đăng ký nhận tin','newsletter','man','nhantin'); ?>     
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">content_copy</i>
                <span>Trang tĩnh</span>
            </a>
            <ul class="ml-menu">
                <?php phanquyen_menu('Giới thiệu','about','capnhat','about'); ?>
                <?php phanquyen_menu('Cập nhật liên hệ','about','capnhat','lienhe'); ?>
                <?php phanquyen_menu('Cập nhật footer','about','capnhat','footer'); ?>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">map</i>
                <span>Địa điểm</span>
            </a>
            <ul class="ml-menu">
                <?php phanquyen_menu('Quản lý Tỉnh thành','place','man_city',''); ?>
                <?php phanquyen_menu('Quản lý Quận huyện','place','man_dist',''); ?>
                <?php phanquyen_menu('Quản lý Phường xã','place','man_ward',''); ?>
                <?php phanquyen_menu('Quản lý Đường','place','man_street',''); ?>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">launch</i>
                <span>Phân quyền</span>
            </a>
            <ul class="ml-menu">
                <?php phanquyen_menu('Quản lý nhóm thành viên','phanquyen','man',''); ?>
                <?php phanquyen_menu('Quản lý thành viên','user','man',''); ?>
                <?php phanquyen_menu('Quản lý com','com','man',''); ?>
            </ul>
        </li>

        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">settings</i>
                <span>Thông tin khác</span>
            </a>
            <ul class="ml-menu">
                <?php phanquyen_menu('Quản lý liên kết web','lkweb','man',''); ?>
                <?php phanquyen_menu('Video','video','man',''); ?>
                <?php phanquyen_menu('Quản lý hỗ trợ trực tuyến','yahoo','man',''); ?>
                <?php phanquyen_menu('Cập nhật thông tin công ty','company','capnhat',''); ?>
                <li><a href="index.php?com=user&act=admin_edit">Quản lý Tài Khoản</a></li>
            </ul>
        </li>
        
    </ul>
</div>
<!-- #Menu -->
<!-- Footer -->
<div class="legal">
    <div class="copyright">
        &copy; 2016 - 2018 <a href="javascript:void(0);">Design by NDT</a>.
    </div>
</div>
<!-- #Footer -->