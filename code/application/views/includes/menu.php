<!DOCTYPE html>
<html>
    <div class="app-sidebar sidebar-shadow">
        <div class="app-header__logo">
            <div class="logo-src"></div>
            <div class="header__pane ml-auto">
                <div>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="app-header__mobile-menu">
            <div>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
        <div class="scrollbar-sidebar" id="meno">
            <div class="app-sidebar__inner">
                <ul class="vertical-nav-menu">
                    <br>
                    <center>
                        <img src="<?php echo base_url('assets/images/logos.jpg'); ?>" width="50%" id="img">
                    </center>
                    <li class="app-sidebar__heading">Menú</li>

                    <li>
                        <a href="<?php echo base_url();?>aspirantes_nuevo">
                            <i class="metismenu-icon pe-7s-users">
                            </i>Aspirantes
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>captura_calificaciones">
                            <i class="metismenu-icon pe-7s-note">
                            </i>Capturar de Calificaciones
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>acta">
                            <i class="metismenu-icon pe-7s-note2">
                            </i>Calificaciones
                        </a>
                    </li>
                  
                </ul>
            </div>
        </div>
    </div>
</html>
