<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<title>Javascript Super Mario Bros + Complete Level 1 and 2 + Map Editor | By Guillermo Bruchmann</title>
	
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Guillermo Bruchmann" />
	<meta name="keywords" content="javascript super mario bross map level editor mario war kart world" />
	<meta name="distribution" content="global" />
	<meta name="audience" content="all" />
	<meta name="author-mail" content="gbruchmann@guic.com.ar" />
	<meta name="publisher" content="Guillermo Bruchmann" />
	
	<link rel="shortcut icon" href="imgs/favicon.ico" />
	<link href="style.css" type="text/css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="comentarios.css" />

    <script type="text/javascript" src="scripts/cookies.js"></script>
    <script type="text/javascript" src="scripts/funciones.js"></script>
    <script type="text/javascript" src="scripts/actualizacion.js"></script>
    <script type="text/javascript" src="scripts/incio.js"></script>
    <script type="text/javascript" src="scripts/actualizacionBichos.js"></script>
    <script type="text/javascript" src="scripts/efectos.js"></script>
    <script type="text/javascript" src="scripts/mapa.js"></script>
    <script type="text/javascript" src="scripts/get.js"></script>
    <script type="text/javascript" src="scripts/resize.js"></script>
    <script type="text/javascript" src="scripts/cubos.js"></script>
    <script type="text/javascript" src="scripts/editor.js"></script>
    <script type="text/javascript" src="scripts/precargar.js"></script>
    <script type="text/javascript" src="scripts/comentarios.js"></script>

</head> 
<body onkeydown="return keyDown(event.keyCode);" onkeyup="return keyUp(event.keyCode);" onmouseup="mouseUp();" onmousemove="mouseDown(event);">
    
	<div id="leftAd">
		
	</div>
	
	<div id="trace"></div>
    <!--<div style="position: absolute; height: 100%; width: 100%; top: 0px; left: 0px;"></div>-->
	
	<img src="borde.png" id="sombra" alt="sombra" style="display: none; position:absolute; height: 519px; width: 580px; left: 50%; top: 0px; margin-top: 0px; margin-left: -290px;" />
	
    <div id="imgsPrecargarBar">
    	<div id="imgsPrecargarBarC"></div>
    </div>
    <div id="imgsPreloadImgs"></div>
    <div id="imgsPrecargar"></div>
    <script type="text/javascript">
		precargar();
	</script>
	
	
    <div id="contenedor" style="display: none;">
        
		<div id="menu">
			<div id="jugar"></div>
			<div id="jugarInstrucciones"></div>
            <div id="cargarMapa"></div>
            <div id="crearMapa"></div>
            <div id="puntosTop"></div>
            <img src="imgs/bichos/hongoSeleccionar.gif" alt="" id="hongoSeleccionar" />
		</div>
        
        <div id="inicio">
            <div id="mundoInicio"></div>
            <div id="vidas">
                <img id="marioVidas" src="imgs/marioChico/mario1.gif" name="24x32" alt="mario"/>
                <label id="vidasN"></label>
            </div>
        </div>
        <div id="gameOver">
        	<div id="gameOverTxt">
</div>
        </div>
        
		<div id="interfaz">
            <div id="mario" class="display" style="margin-top: -12px; padding-top: 12px;">
            	
            	<div id="marioNormal">
                	
                    <img id="mario1" src="imgs/marioChico/mario1.gif" name="24x32" alt="mario"/>
                    <img id="mario2" src="imgs/marioChico/mario2.gif" class="display" name="24x32" alt="mario"/>
                    <img id="mario3" src="imgs/marioChico/mario3.gif" class="display" name="32x32" alt="mario"/>
                    <img id="mario4" src="imgs/marioChico/mario4.gif" class="display" name="32x32" alt="mario"/>
                    <a id="corriendo1" class="display" name="30x32">
                        <img id="corriendo1_1" src="imgs/marioChico/corriendo1.gif" name="30x32" alt="mario"/>
                        <img id="corriendo1_2" src="imgs/marioChico/corriendo1r.gif" class="display" name="30x32" alt="mario"/>
                    </a>
                    <a id="corriendo2" class="display" name="30x32">
                        <img id="corriendo2_1" src="imgs/marioChico/corriendo2.gif" name="30x32" alt="mario"/>
                        <img id="corriendo2_2" src="imgs/marioChico/corriendo2r.gif" class="display" name="30x32" alt="mario"/>
                    </a>
                    <img id="mario5" src="imgs/marioChico/mario5.gif" class="display" name="28x32" alt="mario"/>
                    <img id="mario6" src="imgs/marioChico/mario6.gif" class="display" name="28x32" alt="mario"/>
                    <img id="mario11" src="imgs/marioChico/mario11.gif" class="display" name="32x32" alt="mario"/>
                    <img id="mario12" src="imgs/marioChico/mario12.gif" class="display" name="32x32" alt="mario"/>
                    <img id="mario13" src="imgs/marioChico/mario13.gif" class="display" name="32x32" alt="mario"/>
                    <img id="marioMuerte" src="imgs/marioChico/marioMuerte.gif" class="display" name="32x32" alt="mario"/>
                    <img id="gmario1" src="imgs/marioGrande/mario1.gif" class="display gmario" name="32x64" alt="mario"/>
                    <img id="gmario2" src="imgs/marioGrande/mario2.gif" class="display gmario" name="32x64" alt="mario"/>
                    <img id="gmario3" src="imgs/marioGrande/mario3.gif" class="display gmario" name="32x64" alt="mario"/>
                    <img id="gmario4" src="imgs/marioGrande/mario4.gif" class="display gmario" name="32x64" alt="mario"/>
                    <a id="gcorriendo1" class="display gmario" name="32x64">
                        <img id="gcorriendo1_1" src="imgs/marioGrande/corriendo1.gif" class="gmario" name="32x64" alt="mario"/>
                        <img id="gcorriendo1_2" src="imgs/marioGrande/corriendo1r.gif" class="display gmario" name="32x64"
                        alt="mario"/>
                    </a>
                    <a id="gcorriendo2" class="display" name="32x64">
                        <img id="gcorriendo2_1" src="imgs/marioGrande/corriendo2.gif" class="gmario" name="32x64" alt="mario"/>
                        <img id="gcorriendo2_2" src="imgs/marioGrande/corriendo2r.gif" class="display gmario" name="32x64"
                        alt="mario"/>
                    </a>
                    <img id="gmario5" src="imgs/marioGrande/mario5.gif" class="display gmario" name="32x64" alt="mario"/>
                    <img id="gmario6" src="imgs/marioGrande/mario6.gif" class="display gmario" name="32x64" alt="mario"/>
                    <img id="gmario7" src="imgs/marioGrande/mario7.gif" class="display gmario" name="32x64"
                    style="margin-top:-12px;" alt="mario"/>
                    <img id="gmario8" src="imgs/marioGrande/mario8.gif" class="display gmario" name="32x64"
                    style="margin-top:-12px;" alt="mario"/>
                    <img id="gmario11" src="imgs/marioGrande/mario11.gif" class="display gmario" name="32x64" alt="mario"/>
                    <img id="gmario12" src="imgs/marioGrande/mario12.gif" class="display gmario" name="32x64" alt="mario"/>
                    <img id="gmario13" src="imgs/marioGrande/mario13.gif" class="display gmario" name="32x64" alt="mario"/>
                    <img id="smario1" src="imgs/superMarioGrande/mario1.gif" class="display smario" name="32x64" alt="mario"/>
                    <img id="smario2" src="imgs/superMarioGrande/mario2.gif" class="display smario" name="32x64" alt="mario"/>
                    <img id="smario3" src="imgs/superMarioGrande/mario3.gif" class="display smario" name="32x64" alt="mario"/>
                    <img id="smario4" src="imgs/superMarioGrande/mario4.gif" class="display smario" name="32x64" alt="mario"/>
                    <a id="scorriendo1" class="display gmario" name="32x64">
                        <img id="scorriendo1_1" src="imgs/superMarioGrande/corriendo1.gif" class="smario" name="32x64" alt="mario"/>
                        <img id="scorriendo1_2" src="imgs/superMarioGrande/corriendo1r.gif" class="display smario"
                        name="32x64" alt="mario"/>
                    </a>
                    <a id="scorriendo2" class="display" name="32x64">
                        <img id="scorriendo2_1" src="imgs/superMarioGrande/corriendo2.gif" class="smario" name="32x64" alt="mario"/>
                        <img id="scorriendo2_2" src="imgs/superMarioGrande/corriendo2r.gif" class="display smario"
                        name="32x64" alt="mario"/>
                    </a>
                    <img id="smario5" src="imgs/superMarioGrande/mario5.gif" class="display smario" name="32x64" alt="mario"/>
                    <img id="smario6" src="imgs/superMarioGrande/mario6.gif" class="display smario" name="32x64" alt="mario"/>
                    <img id="smario7" src="imgs/superMarioGrande/mario7.gif" class="display smario" name="32x64"
                    style="margin-top:-12px;" alt="mario"/>
                    <img id="smario8" src="imgs/superMarioGrande/mario8.gif" class="display smario" name="32x64"
                    style="margin-top:-12px;" alt="mario"/>
                    <img id="smario11" src="imgs/superMarioGrande/mario11.gif" class="display smario" name="32x64" alt="mario"/>
                    <img id="smario12" src="imgs/superMarioGrande/mario12.gif" class="display smario" name="32x64" alt="mario"/>
                    <img id="smario13" src="imgs/superMarioGrande/mario13.gif" class="display smario" name="32x64" alt="mario"/>
                </div>
                
                <div id="marioDisparo" class="display">
                    <img id="smario9" src="imgs/superMarioGrande/mario9.gif" class="smario" name="32x64" alt="mario"/>
                    <img id="smario10" src="imgs/superMarioGrande/mario10.gif" class="display smario" name="32x64" alt="mario"/>
                </div>
            </div>
            
            <a id="marioTxt"></a>
            <a id="puntosTxt"></a>
            <a id="monedasTxt"></a>
            <a id="mundoTxt"></a>

            <a id="mundoNTxt"></a>
            <a id="tiempoTxt"></a>
            <a id="tiempoNTxt"></a>
        </div>
        
        <div id="juego">
        	<div id="figurasDiv"></div>
            <div id="mapax"></div>
            <div id="bichosDiv"></div>
            <div id="cubosDiv"></div>
        </div>
        
        <div id="resize">
            <div id="derecha"
            onmousedown="redimensionJuego(0,event);"
            onmouseover="if(!resize){this.style.cursor = 'w-resize'}"
            onmouseout="this.style.cursor = ''"
            title="resize the game"
            ></div>
            
            <div id="abajo"
            onmousedown="redimensionJuego(3,event);"
            onmouseover="if(!resize){this.style.cursor = 's-resize'}"
            onmouseout="this.style.cursor = ''"
            title="resize the game"
            ></div>
            
            <div id="abajoDerecha"
            onmousedown="redimensionJuego(4,event);"
            onmouseover="if(!resize){this.style.cursor = 'se-resize'}"
            onmouseout="this.style.cursor = ''"
            title="resize the game"
            ></div>
            
            <div id="resizeInfoC">
                <a id="resizeInfoFondo"></a>
                <a id="resizeInfo"></a>
            </div>
        </div>
    
         <div id="resizeB"></div>
    </div>
    <div id="contenedorE">
    	
    	<div id="inicioE">
            
            <div id="editorTxt"></div>
            
            <div id="mapasBox" onmousedown="return false"></div>
            
            <div id="mapasBoxTop">
                <div id="mapasTxt"></div>
                <div id="configBoton" onmouseover="bgcolor( this, '#69A5FB' );" onmouseout="bgcolor( this, '' );"
                onclick="cargarConfig();">
                </div>
                <div id="mapasAgregar" onmouseover="bgcolor( this, '#69A5FB' );" onmouseout="bgcolor( this, '' );"
                onclick="nuevoMapa();">
                </div>
            </div>
            
            <div id="configGeneral">
                <div id="configGeneralBox">
                	<div id="configForm">
                    	
                    	<div id="configFormD1"></div>
                        <div id="configFormD2">
                        	<input type="text" class="textInput" id="configFormD2Inp" value="0" onkeydown="return checkNum( event );" />
                        </div>
                        <div id="configFormD3"></div>
                        <div id="configFormD4">
                        	<input type="text" class="textInput" id="configFormD4Inp" value="0" onkeydown="return checkNum( event );" />
                        </div>
                        <div id="configFormD5"></div>
                        <div id="configFormD6">
                        	<input type="text" class="textInput" id="configFormD6Inp" value="0" onkeydown="return checkNum( event );" />
                        </div>
                        <div id="configFormD7">
                        	<div id="configFormDone" class="boton" style="margin: 0 auto;" onclick="configDone();"
                            onmouseover="bgcolor( this, '#69A5FB' );" onmouseout="bgcolor( this, '' );"></div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div id="configGeneralTop">
                <div id="configGeneralTxt"></div>
                <div id="configGeneralEsc" onmouseover="bgcolor( this, '#69A5FB' );" onmouseout="bgcolor( this, '' );"
                onclick="salirConfig();"></div>
            </div>
            
            
            
            <div id="mapaEdit">
                <div id="mapaEditBox">
                    <div id="editForm1">
                    	
                    	<div id="editFormD1">
                        	<div id="editFormD1Inp" class="boton2" style="margin: 0 auto;" onclick="cargarConfigM();"
                            onmouseover="bgcolor( this, '#69A5FB' );" onmouseout="bgcolor( this, '' );"></div>
                        </div>
                        <div id="editFormD2">
                        	<div id="editFormD2Inp" class="boton2" style="margin: 0 auto;" onclick="modificarMapa();"
                            onmouseover="bgcolor( this, '#69A5FB' );" onmouseout="bgcolor( this, '' );"></div>
                        </div>
                        <div id="editFormD3">
                        	<div id="editFormD3Inp" class="boton2" style="margin: 0 auto;"
                            onmouseover="bgcolor( this, '#69A5FB' );" onmouseout="bgcolor( this, '' );"></div>
                        </div>
                        <div id="editFormD4">
                        	<div id="editFormDone1" class="boton" style="margin: 0 auto;" onclick="editarMapaDone();"
                            onmouseover="bgcolor( this, '#69A5FB' );" onmouseout="bgcolor( this, '' );"></div>
                        </div>
                        
                    </div>
                    <div id="editForm2">
                     
                   		<div id="editFormD5"></div>
                        <div id="editFormD6">
                        	<input type="text" class="textInput" id="editFormD6Inp" value="" maxlength="7" />
                        </div>
                        <div id="editFormD7"></div>
                        <div id="editFormD8">
                        	<select class="select" id="editFormD8Sel">
                            	<option id="editFormD8O1" value="1">NORMAL</option>
                                <option id="editFormD8O2" value="2">TUNNEL</option>
                            </select>
                        </div>
                        <div id="editFormD9"></div>
                        <div id="editFormD10">
                        	<input type="text" class="textInput" id="editFormD10Inp" value="0" onkeydown="return checkNum( event );" />
                        </div>
                        <div id="editFormD11">
                        	<div id="editFormDone2" class="boton" style="margin: 0 auto;" onclick="salirConfigM();"
                            onmouseover="bgcolor( this, '#69A5FB' );" onmouseout="bgcolor( this, '' );"></div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div id="mapaEditTop">
                <div id="mapaEditTxt"></div>
            </div>
            
            <div id="modificarMapa">
            	<div id="modificarMapaObjetos">
                	<div id="grillaY"></div>
                    <div id="grillaX"></div>
                </div>
            </div>
        </div>
        
        <div id="modificarMapaMenu">
            <div id="mapaMenuTxt"></div>
            <div id="herramientas">
            	<img src="imgs/editor/cubos.gif" alt="" id="cubosHerramienta" onclick="cambiarCapas( 'cubos' )"
                onmouseover="bgcolor( this, herramientaBG( 'cubos', 1 ) );  editorTrace( 'ETcubos' );"
                onmouseout="bgcolor( this, herramientaBG( 'cubos' ) ); editorTrace( '' );"
                style="background-color: #216DF3;" />
                
            	<img src="imgs/editor/bichos.gif" alt="" id="bichosHerramienta" onclick="cambiarCapas( 'bichos' )"
                onmouseover="bgcolor( this, herramientaBG( 'bichos', 1 ) ); editorTrace( 'ETbichos' );"
                 onmouseout="bgcolor( this, herramientaBG( 'bichos' ) ); editorTrace( '' );" />
                
                <img src="imgs/editor/figuras.gif" alt="" id="figurasHerramienta" onclick="cambiarCapas( 'figuras' )"
                onmouseover="bgcolor( this, herramientaBG( 'figuras', 1 )); editorTrace( 'ETfiguras' );"
                onmouseout="bgcolor( this, herramientaBG( 'figuras' ) ); editorTrace( '' );" />
          </div>
            
            
            <div id="objetoInfo">
            	<div id="objetoInfocubosP" style="display: none;">
                	
                	<div id="cubosPTxt" class="objetoInfoTxt"></div>
                	
                    <div class="objetoInfoD1" id="cubosPD1"></div>
                    <div class="objetoInfoD2" id="cubosPD2">
                        <input type="text" id="cubosPD2Inp" class="textInput2" onkeyup="cambiarPropiedad( this, 'left' );"
                        maxlength="3" />
                    </div>
                    
                    <div class="objetoInfoD3" id="cubosPD3"></div>
                    <div class="objetoInfoD4" id="cubosPD4">
                        <input type="text" id="cubosPD4Inp" class="textInput2" onkeyup="cambiarPropiedad( this, 'top' );"
                        maxlength="2" />
                    </div>
            		
                </div>
                <div id="objetoInfocubosP2" style="display: none;">
                	
                	<div id="cubosP2Txt" class="objetoInfoTxt"></div>
                	
                    <div class="objetoInfoD1" id="cubosP2D1"></div>
                    <div class="objetoInfoD2" id="cubosP2D2">
                        <input type="text" id="cubosP2D2Inp" class="textInput2" onkeyup="cambiarPropiedad( this, 'left' );"
                        maxlength="3" />
                    </div>
                    
                    <div class="objetoInfoD3" id="cubosP2D3"></div>
                    <div class="objetoInfoD4" id="cubosP2D4">
                        <input type="text" id="cubosP2D4Inp" class="textInput2" onkeyup="cambiarPropiedad( this, 'top' );"
                        maxlength="2" />
                    </div>
            		
                </div>
				<div id="objetoInfosigno" style="display: none;">
                	
                	<div id="signoTxt" class="objetoInfoTxt"></div>
                	
                    <div class="objetoInfoD1" id="signoD1"></div>
                    <div class="objetoInfoD2" id="signoD2">
                        <input type="text" id="signoD2Inp" class="textInput2" onkeyup="cambiarPropiedad( this, 'left' );"
                        maxlength="3" />
                    </div>
                    
                    <div class="objetoInfoD3" id="signoD3"></div>
                    <div class="objetoInfoD4" id="signoD4">
                        <input type="text" id="signoD4Inp" class="textInput2" onkeyup="cambiarPropiedad( this, 'top' );"
                        maxlength="2" />
                    </div>
                    
                    <div class="objetoInfoD5" id="signoD5"></div>
                    <div class="objetoInfoD6" id="signoD6">
                    	<select class="select2" id="signoD6Sel" onchange="cambiarPropiedad( this, 'drop' );">
                        	<option value="1">Money</option>
                            <option value="2">Fungus</option>
                            <option value="3">Life fungus</option>
                            <option value="4">Die fungus</option>
                            <option value="5">Star</option>
                        </select>
                    </div>
                    
                    <div class="objetoInfoD7" id="signoD7"></div>
                    <div class="objetoInfoD8" id="signoD8">
                    	<select class="select2" id="signoD8Sel" onchange="cambiarPropiedad( this, 'invisible' );">
                        	<option value="0">Yes</option>
                            <option value="1">No</option>
                        </select>
                    </div>
                    
                    <div class="objetoInfoD9" id="signoD9"></div>
                    <div class="objetoInfoD10" id="signoD10">
                        <input type="text" id="signoD10Inp" class="textInput2" onkeyup="cambiarPropiedad( this, 'puntos' );"
                        maxlength="4" />
                    </div>
                    
                    <div class="objetoInfoD11" id="signoD11"></div>
                    <div class="objetoInfoD12" id="signoD12">
                        <input type="text" id="signoD12Inp" class="textInput2" onkeyup="cambiarPropiedad( this, 'tiempo' );"
                        maxlength="4" />
                    </div>
                    
                </div>
                <div id="objetoInforompible" style="display: none;">
                	
                	<div id="rompibleTxt" class="objetoInfoTxt"></div>
                	
                    <div class="objetoInfoD1" id="rompibleD1"></div>
                    <div class="objetoInfoD2" id="rompibleD2">
                        <input type="text" id="rompibleD2Inp" class="textInput2" onkeyup="cambiarPropiedad( this, 'left' );"
                        maxlength="3" />
                    </div>
                    
                    <div class="objetoInfoD3" id="rompibleD3"></div>
                    <div class="objetoInfoD4" id="rompibleD4">
                        <input type="text" id="rompibleD4Inp" class="textInput2" onkeyup="cambiarPropiedad( this, 'top' );"
                        maxlength="2" />
                    </div>
                    
                    <div class="objetoInfoD5" id="rompibleD5"></div>
                    <div class="objetoInfoD6" id="rompibleD6">
                    	<select class="select2" id="rompibleD6Sel" onchange="cambiarPropiedad( this, 'drop' );">
                        	<option value="0">Nothing</option>
                        	<option value="1">Money</option>
                            <option value="2">Fungus</option>
                            <option value="3">Life fungus</option>
                            <option value="4">Die fungus</option>
                            <option value="5">Star</option>
                        </select>
                    </div>
                    
                    <div class="objetoInfoD7" id="rompibleD7"></div>
                    <div class="objetoInfoD8" id="rompibleD8">
                    	<select class="select2" id="rompibleD8Sel" onchange="cambiarPropiedad( this, 'invisible' );">
                        	<option value="0">Yes</option>
                            <option value="1">No</option>
                        </select>
                    </div>
                    
                    <div class="objetoInfoD9" id="rompibleD9"></div>
                    <div class="objetoInfoD10" id="rompibleD10">
                        <input type="text" id="rompibleD10Inp" class="textInput2" onkeyup="cambiarPropiedad( this, 'puntos' );"
                        maxlength="4" />
                    </div>
                    
                    <div class="objetoInfoD11" id="rompibleD11"></div>
                    <div class="objetoInfoD12" id="rompibleD12">
                        <input type="text" id="rompibleD12Inp" class="textInput2" onkeyup="cambiarPropiedad( this, 'tiempo' );"
                        maxlength="4" />
                    </div>
                    
                </div>
                <div id="objetoInfomoneda" style="display: none;">
                	
                	<div id="monedaTxt" class="objetoInfoTxt"></div>
                	
                    <div class="objetoInfoD1" id="monedaD1"></div>
                    <div class="objetoInfoD2" id="monedaD2">
                        <input type="text" id="monedaD2Inp" class="textInput2" onkeyup="cambiarPropiedad( this, 'left' );"
                        maxlength="3" />
                    </div>
                    
                    <div class="objetoInfoD3" id="monedaD3"></div>
                    <div class="objetoInfoD4" id="monedaD4">
                        <input type="text" id="monedaD4Inp" class="textInput2" onkeyup="cambiarPropiedad( this, 'top' );"
                        maxlength="2" />
                    </div>
                    
                    <div class="objetoInfoD5" id="monedaD5"></div>
                    <div class="objetoInfoD6" id="monedaD6">
                        <input type="text" id="monedaD6Inp" class="textInput2" onkeyup="cambiarPropiedad( this, 'puntos' );"
                        maxlength="4" />
                    </div>
                    
                </div>
                <div id="objetoInfobicho" style="display: none;">
                	
                	<div id="bichoTxt" class="objetoInfoTxt"></div>
                	
                    <div class="objetoInfoD1" id="bichoD1"></div>
                    <div class="objetoInfoD2" id="bichoD2">
                        <input type="text" id="bichoD2Inp" class="textInput2" onkeyup="cambiarPropiedad( this, 'left' );"
                        maxlength="3" />
                    </div>
                    
                    <div class="objetoInfoD3" id="bichoD3"></div>
                    <div class="objetoInfoD4" id="bichoD4">
                        <input type="text" id="bichoD4Inp" class="textInput2" onkeyup="cambiarPropiedad( this, 'top' );"
                        maxlength="2" />
                    </div>
                    
                    <div class="objetoInfoD5" id="bichoD5"></div>
                    <div class="objetoInfoD6" id="bichoD6">
                        <input type="text" id="bichoD6Inp" class="textInput2" onkeyup="cambiarPropiedad( this, 'puntos' );"
                        maxlength="4" />
                    </div>
                    
                </div>
                <div id="objetoInfotortuga" style="display: none;">
                	
                	<div id="tortugaTxt" class="objetoInfoTxt"></div>
                	
                    <div class="objetoInfoD1" id="tortugaD1"></div>
                    <div class="objetoInfoD2" id="tortugaD2">
                        <input type="text" id="tortugaD2Inp" class="textInput2" onkeyup="cambiarPropiedad( this, 'left' );"
                        maxlength="3" />
                    </div>
                    
                    <div class="objetoInfoD3" id="tortugaD3"></div>
                    <div class="objetoInfoD4" id="tortugaD4">
                        <input type="text" id="tortugaD4Inp" class="textInput2" onkeyup="cambiarPropiedad( this, 'top' );"
                        maxlength="2" />
                    </div>
                    
                    <div class="objetoInfoD5" id="tortugaD5"></div>
                    <div class="objetoInfoD6" id="tortugaD6">
                    	<select class="select2" id="tortugaD6Sel" onchange="cambiarPropiedad( this, 'tipoT' );">
                        	<option value="1">Green</option>
                            <option value="2">Red</option>
                        </select>
                    </div>
                    
                    <div class="objetoInfoD7" id="tortugaD7"></div>
                    <div class="objetoInfoD8" id="tortugaD8">
                        <input type="text" id="tortugaD8Inp" class="textInput2" onkeyup="cambiarPropiedad( this, 'puntos' );"
                        maxlength="4" />
                    </div>
                    
                </div>
                <div id="objetoInfotubo" style="display: none;">
                	
                	<div id="tuboTxt" class="objetoInfoTxt"></div>
                	
                    <div class="objetoInfoD1" id="tuboD1"></div>
                    <div class="objetoInfoD2" id="tuboD2">
                        <input type="text" id="tuboD2Inp" class="textInput2" onkeyup="cambiarPropiedad( this, 'left' );"
                        maxlength="3" />
                    </div>
                    
                    <div class="objetoInfoD3" id="tuboD3"></div>
                    <div class="objetoInfoD4" id="tuboD4">
                        <input type="text" id="tuboD4Inp" class="textInput2" onkeyup="cambiarPropiedad( this, 'top' );"
                        maxlength="2" />
                    </div>
                    
                    <div class="objetoInfoD5" id="tuboD5"></div>
                    <div class="objetoInfoD6" id="tuboD6">
                        <input type="text" id="tuboD6Inp" class="textInput2" onkeyup="cambiarPropiedad( this, 'alto' );"
                        maxlength="2" />
                    </div>
                    
                    <div class="objetoInfoD7" id="tuboD7"></div>
                    <div class="objetoInfoD8" id="tuboD8">
                    	<select class="select2" id="tuboD8Sel" onchange="cambiarPropiedad( this, 'tipoT' );">
                        	<option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    
                    <div class="objetoInfoD9" id="tuboD9"></div>
                    <div class="objetoInfoD10" id="tuboD10">
                    	<select class="select2" id="tuboD10Sel" onchange="cambiarPropiedad( this, 'bicho' );">
                        	<option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    
                </div>
                <div id="objetoInfofigura" style="display: none;">
                	
                	<div id="figuraTxt" class="objetoInfoTxt"></div>
                	
                    <div class="objetoInfoD1" id="figuraD1"></div>
                    <div class="objetoInfoD2" id="figuraD2">
                        <input type="text" id="figuraD2Inp" class="textInput2" onkeyup="cambiarPropiedad( this, 'left' );"
                        maxlength="3" />
                    </div>
                    
                    <div class="objetoInfoD3" id="figuraD3"></div>
                    <div class="objetoInfoD4" id="figuraD4">
                        <input type="text" id="figuraD4Inp" class="textInput2" onkeyup="cambiarPropiedad( this, 'top' );"
                        maxlength="2" />
                    </div>
                    
                    <div class="objetoInfoD5" id="figuraD5"></div>
                    <div class="objetoInfoD6" id="figuraD6">
                    	<select class="select2" id="figuraD6Sel" onchange="cambiarPropiedad( this, 'tipoT' );">
                        	<option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                        </select>
                    </div>
                    
                </div>
                <div id="objetoInfobandera" style="display: none;">
                	
                	<div id="banderaTxt" class="objetoInfoTxt"></div>
                	
                    <div class="objetoInfoD1" id="banderaD1"></div>
                    <div class="objetoInfoD2" id="banderaD2">
                        <input type="text" id="banderaD2Inp" class="textInput2" onkeyup="cambiarPropiedad( this, 'left' );"
                        maxlength="3" />
                    </div>
                    
                    <div class="objetoInfoD3" id="banderaD3"></div>
                    <div class="objetoInfoD4" id="banderaD4">
                        <input type="text" id="banderaD4Inp" class="textInput2" onkeyup="cambiarPropiedad( this, 'top' );"
                        maxlength="2" />
                    </div>
                    
                </div>
                <div id="objetoInfobarra" style="display: none;">
                	
                	<div id="barraTxt" class="objetoInfoTxt"></div>
                	
                    <div class="objetoInfoD1" id="barraD1"></div>
                    <div class="objetoInfoD2" id="barraD2">
                        <input type="text" id="barraD2Inp" class="textInput2" onkeyup="cambiarPropiedad( this, 'left' );"
                        maxlength="3" />
                    </div>
                    
                    <div class="objetoInfoD3" id="barraD3"></div>
                    <div class="objetoInfoD4" id="barraD4">
                    	<select class="select2" id="barraD4Sel" onchange="cambiarPropiedad( this, 'direccion' );">
                        	<option value="0">Down to Up</option>
                            <option value="1">Up to Down</option>
                        </select>
                    </div>
                    
                </div>
            </div>
            
            
            <div id="editorTrace">
                <div id="ETcubos"></div>
                <div id="ETbichos"></div>
                <div id="ETfiguras"></div>
                
                <div id="ETscroll"></div>
                <div id="ETobjeto"></div>
            </div>
        </div>
        
        <div id="editorScrollContenedor" onmouseover="editorTrace( 'ETscroll' );" onmouseout="editorTrace( '' );" >
        	<div id="editorScroll" onmousedown="editor.scroll.empezar();"></div>
        </div>
        
        <div id="grillaYT" onclick="grillaY();"></div>
        <div id="grillaXT" onclick="grillaX();"><div id="grillaXL"></div></div>
        
    </div>
	
	<div id="about">
		<img src="../../images/468x15_4.gif"><br/>
	    <p style="color: black;"> Source code >> <a href="games/mario/mario.zip">  Download</a></p>
	</div>
	
</body>
</html>