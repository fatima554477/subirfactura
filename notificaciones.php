            <nav class="navbar navbar-expand gap-3">
              <div class="mobile-menu-button"><ion-icon name="menu-sharp"></ion-icon></div>
             <!-- <form class="searchbar">
                <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><ion-icon name="search-sharp"></ion-icon></div>
                <input class="form-control" type="text" placeholder="Search for anything">
                <div class="position-absolute top-50 translate-middle-y search-close-icon"><ion-icon name="close-sharp"></ion-icon></div>
             </form>-->
			 
			 
			 
			 
			 
			 
<div id="content" >     

			  <strong><p class="mb-0 text-uppercase">&nbsp;&nbsp;&nbsp;MOSTRAR TODO
<img src="includes/contraertodos11.png" id="mostrartodos" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;CONTRAER TODO
<img src="includes/contraertodos2.png" id="ocultartodos" style="cursor:pointer;"/>&nbsp;<?php echo  isset($P_NOMBRE_COMERCIAL_EMPRESA)?' || '.$P_NOMBRE_COMERCIAL_EMPRESA:'';?>&nbsp;
<?php echo  isset($P_RFC_MTDP)?'RFC: '.$P_RFC_MTDP:'';?>	 </p> </strong> </div>

			
			 
			 
			 
             <div class="top-navbar-right ms-auto">

              <ul class="navbar-nav align-items-center">
                <li class="nav-item mobile-search-button">
                  <a class="nav-link" href="javascript:;">
                    <div class="">
                      <ion-icon name="search-sharp"></ion-icon>
                    </div>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link dark-mode-icon" href="javascript:;">
                    <div class="mode-icon">
                      <ion-icon name="moon-sharp"></ion-icon> 
                    </div>
                  </a>
                </li>
                <li class="nav-item dropdown dropdown-large" id="notifDropdownContainer">
                  <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown" id="notifDropdownToggle">
                    <div class="position-relative">
                      <span class="notify-badge">1</span>
                      <ion-icon name="notifications-sharp"></ion-icon>
                    </div>
                  </a>
				  
				  
                 <div class="dropdown-menu dropdown-menu-end" id="notifDropdownMenu">
                    <div class="notif-aviso-header">
                      <div class="notif-aviso-icon"><ion-icon name="alert-circle"></ion-icon></div>
                      <div>
                        <p class="notif-aviso-title">Aviso importante</p>
                        <p class="notif-aviso-subtitle">Antes de continuar, lee lo siguiente</p>
                      </div>
                    </div>
                    <div class="notif-aviso-body">
                      <p class="notif-aviso-text">Antes de ingresar tu factura, revisa que todos tus documentos estén actualizados.</p>
                    </div>
                    <div class="notif-aviso-footer">
                      <span class="notif-aviso-tag">Este aviso se cerrará automáticamente</span>
                    </div>
                  </div>

				
				</li>
				
							<li class="nav-item">
							
     
                    <div class="mode-icon">
	<h6 class="mb-0 dropdown-user-name"><?php echo $_SESSION["NOMBREUSUARIO"]; ?></h6>
                    </div>
        
                </li>			
				
                <li class="nav-item dropdown dropdown-user-setting">
                  <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                    <div class="user-setting">
                      <img src="<?PHP ECHO 'includes/archivos/'.$_SESSION["F_FOTO_ACTUAL"]; ?>" class="user-img" alt="">
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                       <a class="dropdown-item" href="#">
                         <div class="d-flex flex-row align-items-center gap-2">
                            <img src="<?PHP ECHO 'includes/archivos/'.$_SESSION["F_FOTO_ACTUAL"]; ?>" alt="" class="rounded-circle" width="54" height="54">
                            <div class="">
                              <h6 class="mb-0 dropdown-user-name"><?php echo $_SESSION["NOMBREUSUARIO"]; ?></h6>
                            </div>
                         </div>
                       </a>
                     </li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <a class="dropdown-item" href="index.php?salir=1">
                           <div class="d-flex align-items-center">
                             <div class=""><ion-icon name="log-out-outline"></ion-icon></div>
                             <div class="ms-3"><span>SALIR</span></div>
                           </div>
                         </a>
                      </li>
                  </ul>
                </li>

               </ul>

              </div>
            </nav>

<style>
#notifDropdownMenu {
    width: 380px;
    max-width: 90vw;
    padding: 0;
    border: none;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
}

.notif-aviso-header {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 18px 20px;
    background: linear-gradient(135deg, #dc3545, #b02a37);
    color: #fff;
}

.notif-aviso-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 42px;
    height: 42px;
    min-width: 42px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.18);
    font-size: 24px;
}

.notif-aviso-title {
    margin: 0;
    font-size: 15px;
    font-weight: 700;
    letter-spacing: 0.3px;
}

.notif-aviso-subtitle {
    margin: 2px 0 0;
    font-size: 12px;
    opacity: 0.9;
}

.notif-aviso-body {
    padding: 18px 20px;
    background: #fff;
}

.notif-aviso-text {
    margin: 0;
    font-size: 15px;
    line-height: 1.6;
    color: #2b2b2b;
    text-align: justify;
    text-transform: uppercase;
    font-weight: 700;
}

.notif-aviso-footer {
    padding: 10px 20px;
    background: #f8f9fa;
    border-top: 1px solid #eee;
    text-align: center;
}

.notif-aviso-tag {
    font-size: 11px;
    color: #888;
    font-style: italic;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var toggle = document.getElementById('notifDropdownToggle');
    var menu = document.getElementById('notifDropdownMenu');

    if (toggle && menu) {
        // Abre el dropdown automáticamente al cargar la página
        var dropdownInstance = bootstrap.Dropdown.getOrCreateInstance(toggle);
        dropdownInstance.show();

        // Lo cierra automáticamente después de 10 segundos
        setTimeout(function () {
            dropdownInstance.hide();
        }, 10000);
    }
});
</script>
