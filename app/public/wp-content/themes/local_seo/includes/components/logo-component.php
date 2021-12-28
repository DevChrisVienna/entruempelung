<?php

$base =  realpath(__DIR__ . DIRECTORY_SEPARATOR . '..'); 

require_once $base . '/models/basic-data-model.php';




function logo_view(){

    return '

	<a href="" rel="home" title="'.$blog_title.'">
                    <span class="logo">
                         <svg width="60" height="60" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <title>
                                           
                                        </title>

                                        <rect stroke="#000" id="svg_5" height="59" width="59" y="0.5" x="0.5"
                                            fill="#999" />
                                        <ellipse stroke="#000" ry="29" rx="29" id="svg_1" cy="30" cx="30" fill="#fff" />
                                        <path fill="#333" stroke="#000"
                                            d="m5.125,59.63931l24.94643,-49.49993l24.94643,49.49993l-49.89285,0l-0.00001,0z"
                                            id="logo" />

                                    </g>

                                </svg>
                    </span>

                </a>
  
     ';
        

}

?>