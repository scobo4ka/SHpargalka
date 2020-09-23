<?php

    if( isset($_GET['id']) ) {
        
        $code = R::findOne('share', 'code_hash = ?', array( $_GET['id'] ));
        
        if( isset($code['code_hash'] )) {

            require 'blocks/body_code.html';
            
            $filename = $_SERVER['DOCUMENT_ROOT'] . '/uploads/txt/' . $_GET['id'] . '.txt';
            $file = file_get_contents($filename);
            echo $file;
            
            echo '
                <script>

                    let file = "' . $file . '";
                    let str_len = "' . strlen($file) . '";
                    let mode = "' . $code['mode'] . '";

                    if(mode == "c++") {
                        editor.setOption("mode", "text/x-c++src" );
        
                    } else if(mode == "Python") {
                        editor.setOption("mode", "python" );
        
                    } else if(mode == "Pascal") {
                        editor.setOption("mode", "text/x-pascal" );
        
                    } else if(mode == "CSS") {
                        editor.setOption("mode", "text/css" );
        
                    } else if(mode == "JavaScript") {
                        editor.setOption("mode", "text/javascript" );
        
                    } else if(mode == "HTML") {
                        editor.setOption("mode", "text/html" );
        
                    } else if(mode == "PHP") {
                        editor.setOption("mode", "php" );
        
                    }

                    for(let i = 0; i < str_len; i++ ) {
                        file = file.replace(" // ", "\n");
                    }

                    file = file.replace(" // ", "\n");

                    editor.setValue(file);

                </script>
            ';

        } else {

            require 'blocks/body.html';

        }

    } else {

        require 'blocks/body.html';

    }

?>