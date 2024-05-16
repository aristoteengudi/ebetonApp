<?php

use yii\helpers\Url;
use yii\helpers\Html;

?>
<div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <a href="#" class="logo">
                        <span>
                                <img src="<?= Yii::getAlias('@web/asset/images/logo_2.png')?>" alt="" height="18">
                            </span>
            <i>
                <img src="<?= Yii::getAlias('@web/asset/images/logo_2.png')?>" alt="" height="22">
            </i>
        </a>
    </div>

    <nav class="navbar-custom">
        <ul class="navbar-right list-inline float-right mb-0">
            <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                <form role="search" class="app-search">
                    <div class="form-group mb-0">
                        <input type="text" class="form-control" placeholder="Search..">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </li>

            <!-- language-->
            <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
            </li>

            <!-- full screen -->
            <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                    <i class="mdi mdi-fullscreen noti-icon"></i>
                </a>
            </li>

            <!-- notification -->
            <li class="dropdown notification-list list-inline-item">
                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="mdi mdi-bell-outline noti-icon"></i>
                    <span class="badge badge-pill badge-danger noti-icon-badge">3</span>
                </a>
            </li>
            <li class="dropdown notification-list list-inline-item">
                <div class="dropdown notification-list nav-pro-img">
                    <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="<?= Yii::getAlias('@web/asset/images/users/user.png')?>" alt="user" class="rounded-circle">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5"></i> <?= Yii::$app->user->identity->first_name?></a>
                        <div class="dropdown-divider"></div>
                        <?php echo
                        Html::beginForm(['/site/logout'], 'post'),
                            Html::submitButton(
                                '<i class="mdi mdi-power text-danger"></i> Deconnexion',
                                ['class' => 'dropdown-item text-danger']
                            )
                            . Html::endForm()  ?>
                    </div>
                </div>
            </li>

        </ul>

        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left waves-effect">
                    <i class="mdi mdi-menu"></i>
                </button>
            </li>

        </ul>

    </nav>

</div>
<!-- Top Bar End -->

<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Main</li>
                <li>
                    <a href="<?= Url::toRoute('/dashboard')?>" class="waves-effect">
                        <i class="ti-home"></i><span class="badge badge-primary badge-pill float-right"></span> <span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-hashtag"></i><span> Gestion Prisonnier <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="<?= Url::toRoute('prisoner/entry-information')?>">Enregistrement</a></li>
                        <li><a href="<?= Url::toRoute('prisoner/list-prisoners')?>">Liste Prisonniers</a></li>
                        <li><a href="">Transfer</a></li>
                        <li><a href="">Escape</a></li>
                        <li><a href="">Grace</a></li>
                        <li><a href="">Release</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-gavel"></i><span> Decision Juridique <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="<?= Url::toRoute('decision/index')?>">Decision</a></li>
                        <li><a href="<?= Url::toRoute('decision/create')?>">Créer</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class=" fas fa-users "></i><span> Gestion Visiteurs <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="<?= Url::toRoute('visit/create')?>">Crée Visite</a></li>
                        <li><a href="<?= Url::toRoute('visit/index')?>">Liste Visite</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-briefcase-medical"></i><span> Gestion santé <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="">Fiche médicale</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-database"></i><span> Gestion stock <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="<?= Url::toRoute('stock-alimentaire/')?>">Alimentaire</a></li>
                        <li><a href="<?= Url::toRoute('logistique/')?>">Logistique</a></li>
                        <li><a href="<?= Url::toRoute('sanitaire/')?>">Sanitaire</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-database"></i><span>Gestion Staffs <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="<?= Url::toRoute('staff/create')?>">Add Managements</a></li>
                        <li><a href="<?= Url::toRoute('staff/index')?>">Liste des Personneles</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class=" fas fa-tools "></i><span>Configurations <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="<?= Url::toRoute('prison-settings/index')?>">Liste de Prisonniers</a></li>
                    </ul>
                </li>

            </ul>

        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>