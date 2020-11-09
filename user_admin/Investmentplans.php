<!--incuding the header-->
<?php include_once"inc/header.php"; ?>

</head>

<body>
    <!--PRELOADER-->
    <div id="preloader">
        <div id="status"></div>
    </div>

    <!-- start Container Wrapper -->
    <div id="container-wrapper">
        <!-- Dashboard -->
        <div id="dashboard">

            <!-- navigations -->
            <?php $thisPage = 'investmentplans'; ?>
            <?php include_once"inc/nav.php"; ?>
            
            <div class="dashboard-content">
                <div class="row">
                      <div class="col-lg-4" style="padding-bottom: 50px;">
                        <div class="sign-up-row widget-shadow" style="width:100%; padding:0px;">
                            <h3 style="background-color:#e9e9e9; padding:20px; margin-bottom: 0px;">

                                <img style="width:70px;" src="images/tiffany.png"> TIFFANY
                            </h3>

                            <div style="padding:20px; text-align:left; background-color: white;">

                                <p>
                         <font color="blue"><i class="fa fa-star"></i>
                                    </font> Criteria For Join This Plan :
                                </p>
                                       <p><svg class="svg-inline--fa  fa-w-16 fa-" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="null" role="img" xmlns="" viewBox="0 0 512 512" data-fa-i2svg="" style="width: 12px;">
                                        <g>
                    <path fill="currentColor" d="M156.5,447.7l-12.6,29.5c-18.7-9.5-35.9-21.2-51.5-34.9l22.7-22.7C127.6,430.5,141.5,440,156.5,447.7z M40.6,272H8.5 c1.4,21.2,5.4,41.7,11.7,61.1L50,321.2C45.1,305.5,41.8,289,40.6,272z M40.6,240c1.4-18.8,5.2-37,11.1-54.1l-29.5-12.6 C14.7,194.3,10,216.7,8.5,240H40.6z M64.3,156.5c7.8-14.9,17.2-28.8,28.1-41.5L69.7,92.3c-13.7,15.6-25.5,32.8-34.9,51.5 L64.3,156.5z M397,419.6c-13.9,12-29.4,22.3-46.1,30.4l11.9,29.8c20.7-9.9,39.8-22.6,56.9-37.6L397,419.6z M115,92.4 c13.9-12,29.4-22.3,46.1-30.4l-11.9-29.8c-20.7,9.9-39.8,22.6-56.8,37.6L115,92.4z M447.7,355.5c-7.8,14.9-17.2,28.8-28.1,41.5 l22.7,22.7c13.7-15.6,25.5-32.9,34.9-51.5L447.7,355.5z M471.4,272c-1.4,18.8-5.2,37-11.1,54.1l29.5,12.6 c7.5-21.1,12.2-43.5,13.6-66.8H471.4z M321.2,462c-15.7,5-32.2,8.2-49.2,9.4v32.1c21.2-1.4,41.7-5.4,61.1-11.7L321.2,462z M240,471.4c-18.8-1.4-37-5.2-54.1-11.1l-12.6,29.5c21.1,7.5,43.5,12.2,66.8,13.6V471.4z M462,190.8c5,15.7,8.2,32.2,9.4,49.2h32.1 c-1.4-21.2-5.4-41.7-11.7-61.1L462,190.8z M92.4,397c-12-13.9-22.3-29.4-30.4-46.1l-29.8,11.9c9.9,20.7,22.6,39.8,37.6,56.9 L92.4,397z M272,40.6c18.8,1.4,36.9,5.2,54.1,11.1l12.6-29.5C317.7,14.7,295.3,10,272,8.5V40.6z M190.8,50 c15.7-5,32.2-8.2,49.2-9.4V8.5c-21.2,1.4-41.7,5.4-61.1,11.7L190.8,50z M442.3,92.3L419.6,115c12,13.9,22.3,29.4,30.5,46.1 l29.8-11.9C470,128.5,457.3,109.4,442.3,92.3z M397,92.4l22.7-22.7c-15.6-13.7-32.8-25.5-51.5-34.9l-12.6,29.5 C370.4,72.1,384.4,81.5,397,92.4z"></path>
                                            <circle fill="currentColor" cx="256" cy="364" r="28">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="r" values="28;14;28;28;14;28;"></animate>
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="1;0;1;1;0;1;"></animate>
                                            </circle>
                                            <path fill="currentColor" opacity="1" d="M263.7,312h-16c-6.6,0-12-5.4-12-12c0-71,77.4-63.9,77.4-107.8c0-20-17.8-40.2-57.4-40.2c-29.1,0-44.3,9.6-59.2,28.7 c-3.9,5-11.1,6-16.2,2.4l-13.1-9.2c-5.6-3.9-6.9-11.8-2.6-17.2c21.2-27.2,46.4-44.7,91.2-44.7c52.3,0,97.4,29.8,97.4,80.2 c0,67.6-77.4,63.5-77.4,107.8C275.7,306.6,270.3,312,263.7,312z">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="1;0;0;0;0;1;"></animate>
                                            </path>
                                            <path fill="currentColor" opacity="0" d="M232.5,134.5l7,168c0.3,6.4,5.6,11.5,12,11.5h9c6.4,0,11.7-5.1,12-11.5l7-168c0.3-6.8-5.2-12.5-12-12.5h-23 C237.7,122,232.2,127.7,232.5,134.5z">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="0;0;1;1;0;0;"></animate>
                                            </path>
                                        </g>
                                    </svg><!-- <i class="fa fa-"></i> -->Personel Investment : $700 </p>
                                <p> OR </p>
                                <p><svg class="svg-inline--fa  fa-w-16 fa-" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="null" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="width: 12px;">
                                        <g>
                                            <path fill="currentColor" d="M156.5,447.7l-12.6,29.5c-18.7-9.5-35.9-21.2-51.5-34.9l22.7-22.7C127.6,430.5,141.5,440,156.5,447.7z M40.6,272H8.5 c1.4,21.2,5.4,41.7,11.7,61.1L50,321.2C45.1,305.5,41.8,289,40.6,272z M40.6,240c1.4-18.8,5.2-37,11.1-54.1l-29.5-12.6 C14.7,194.3,10,216.7,8.5,240H40.6z M64.3,156.5c7.8-14.9,17.2-28.8,28.1-41.5L69.7,92.3c-13.7,15.6-25.5,32.8-34.9,51.5 L64.3,156.5z M397,419.6c-13.9,12-29.4,22.3-46.1,30.4l11.9,29.8c20.7-9.9,39.8-22.6,56.9-37.6L397,419.6z M115,92.4 c13.9-12,29.4-22.3,46.1-30.4l-11.9-29.8c-20.7,9.9-39.8,22.6-56.8,37.6L115,92.4z M447.7,355.5c-7.8,14.9-17.2,28.8-28.1,41.5 l22.7,22.7c13.7-15.6,25.5-32.9,34.9-51.5L447.7,355.5z M471.4,272c-1.4,18.8-5.2,37-11.1,54.1l29.5,12.6 c7.5-21.1,12.2-43.5,13.6-66.8H471.4z M321.2,462c-15.7,5-32.2,8.2-49.2,9.4v32.1c21.2-1.4,41.7-5.4,61.1-11.7L321.2,462z M240,471.4c-18.8-1.4-37-5.2-54.1-11.1l-12.6,29.5c21.1,7.5,43.5,12.2,66.8,13.6V471.4z M462,190.8c5,15.7,8.2,32.2,9.4,49.2h32.1 c-1.4-21.2-5.4-41.7-11.7-61.1L462,190.8z M92.4,397c-12-13.9-22.3-29.4-30.4-46.1l-29.8,11.9c9.9,20.7,22.6,39.8,37.6,56.9 L92.4,397z M272,40.6c18.8,1.4,36.9,5.2,54.1,11.1l12.6-29.5C317.7,14.7,295.3,10,272,8.5V40.6z M190.8,50 c15.7-5,32.2-8.2,49.2-9.4V8.5c-21.2,1.4-41.7,5.4-61.1,11.7L190.8,50z M442.3,92.3L419.6,115c12,13.9,22.3,29.4,30.5,46.1 l29.8-11.9C470,128.5,457.3,109.4,442.3,92.3z M397,92.4l22.7-22.7c-15.6-13.7-32.8-25.5-51.5-34.9l-12.6,29.5 C370.4,72.1,384.4,81.5,397,92.4z"></path>
                                            <circle fill="currentColor" cx="256" cy="364" r="28">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="r" values="28;14;28;28;14;28;"></animate>
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="1;0;1;1;0;1;"></animate>
                                            </circle>
                                            <path fill="currentColor" opacity="1" d="M263.7,312h-16c-6.6,0-12-5.4-12-12c0-71,77.4-63.9,77.4-107.8c0-20-17.8-40.2-57.4-40.2c-29.1,0-44.3,9.6-59.2,28.7 c-3.9,5-11.1,6-16.2,2.4l-13.1-9.2c-5.6-3.9-6.9-11.8-2.6-17.2c21.2-27.2,46.4-44.7,91.2-44.7c52.3,0,97.4,29.8,97.4,80.2 c0,67.6-77.4,63.5-77.4,107.8C275.7,306.6,270.3,312,263.7,312z">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="1;0;0;0;0;1;"></animate>
                                            </path>
                                            <path fill="currentColor" opacity="0" d="M232.5,134.5l7,168c0.3,6.4,5.6,11.5,12,11.5h9c6.4,0,11.7-5.1,12-11.5l7-168c0.3-6.8-5.2-12.5-12-12.5h-23 C237.7,122,232.2,127.7,232.5,134.5z">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="0;0;1;1;0;0;"></animate>
                                            </path>
                                        </g>
                                    </svg><!-- <i class="fa fa-"></i> -->Structural Investment

                                    : $4999</p>
                                <hr>
                                <p>
                                    <font color="blue"><svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="" style="width: 16px;">
                                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" ></path>
                                        </svg><!-- <i class="fa fa-star"></i> -->
                                    </font>Referal Bonuses :
                                </p>

                                <hr>

                                <table style="width:100%;">

                                    <tbody>
                                        <tr>



                                            <td style="width:50%;">

                                                <strong>Investment Bonus</strong>

                                                <p>First Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">3%</font>
                                                </p>

                                                <p>Second Line:&nbsp;<font color="red">2%</font>
                                                </p>

                                                <p>Third Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">1%</font>
                                                </p>

                                                <p>Fourth Line:&nbsp;&nbsp;&nbsp;<font color="red">0%</font>
                                                </p>

                                                <p>Fifth Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">0%</font>
                                                </p>

                                            </td>

                                            <td style="width:50%;">

                                                <strong>Profit Bonus</strong>

                                                <p>First Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">3%</font>
                                                </p>

                                                <p>Second Line&nbsp;:&nbsp;<font color="red">1%</font>
                                                </p>

                                                <p>Third Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">1%</font>
                                                </p>

                                                <p>Fourth Line&nbsp;:&nbsp;&nbsp;&nbsp;<font color="red">0%</font>
                                                </p>

                                                <p>Fifth Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">0%</font>
                                                </p>

                                            </td>

                                        </tr>

                                    </tbody>
                                </table>




                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4" style="padding-bottom: 50px;">

                        <div class="sign-up-row widget-shadow" style="width:100%; padding:0px; background-color: white;">

                            <h3 style="background-color:#e9e9e9; padding:20px; margin-bottom: 0px;">

                                <img style="width:70px;" src="images/bluemoon.png"> BLUEMOON
                            </h3>

                            <div style="padding:20px; text-align:left; ">

                                <p>
                                    <font color="blue"><i class="fa fa-star"></i>
                                    </font> Criteria For Join This Plan :
                                </p>


                                <p><svg class="svg-inline--fa  fa-w-16 fa-" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="null" role="img" xmlns="" viewBox="0 0 512 512" data-fa-i2svg="" style="width: 12px;">
                                        <g>
                                            <path fill="currentColor" d="M156.5,447.7l-12.6,29.5c-18.7-9.5-35.9-21.2-51.5-34.9l22.7-22.7C127.6,430.5,141.5,440,156.5,447.7z M40.6,272H8.5 c1.4,21.2,5.4,41.7,11.7,61.1L50,321.2C45.1,305.5,41.8,289,40.6,272z M40.6,240c1.4-18.8,5.2-37,11.1-54.1l-29.5-12.6 C14.7,194.3,10,216.7,8.5,240H40.6z M64.3,156.5c7.8-14.9,17.2-28.8,28.1-41.5L69.7,92.3c-13.7,15.6-25.5,32.8-34.9,51.5 L64.3,156.5z M397,419.6c-13.9,12-29.4,22.3-46.1,30.4l11.9,29.8c20.7-9.9,39.8-22.6,56.9-37.6L397,419.6z M115,92.4 c13.9-12,29.4-22.3,46.1-30.4l-11.9-29.8c-20.7,9.9-39.8,22.6-56.8,37.6L115,92.4z M447.7,355.5c-7.8,14.9-17.2,28.8-28.1,41.5 l22.7,22.7c13.7-15.6,25.5-32.9,34.9-51.5L447.7,355.5z M471.4,272c-1.4,18.8-5.2,37-11.1,54.1l29.5,12.6 c7.5-21.1,12.2-43.5,13.6-66.8H471.4z M321.2,462c-15.7,5-32.2,8.2-49.2,9.4v32.1c21.2-1.4,41.7-5.4,61.1-11.7L321.2,462z M240,471.4c-18.8-1.4-37-5.2-54.1-11.1l-12.6,29.5c21.1,7.5,43.5,12.2,66.8,13.6V471.4z M462,190.8c5,15.7,8.2,32.2,9.4,49.2h32.1 c-1.4-21.2-5.4-41.7-11.7-61.1L462,190.8z M92.4,397c-12-13.9-22.3-29.4-30.4-46.1l-29.8,11.9c9.9,20.7,22.6,39.8,37.6,56.9 L92.4,397z M272,40.6c18.8,1.4,36.9,5.2,54.1,11.1l12.6-29.5C317.7,14.7,295.3,10,272,8.5V40.6z M190.8,50 c15.7-5,32.2-8.2,49.2-9.4V8.5c-21.2,1.4-41.7,5.4-61.1,11.7L190.8,50z M442.3,92.3L419.6,115c12,13.9,22.3,29.4,30.5,46.1 l29.8-11.9C470,128.5,457.3,109.4,442.3,92.3z M397,92.4l22.7-22.7c-15.6-13.7-32.8-25.5-51.5-34.9l-12.6,29.5 C370.4,72.1,384.4,81.5,397,92.4z"></path>
                                            <circle fill="currentColor" cx="256" cy="364" r="28">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="r" values="28;14;28;28;14;28;"></animate>
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="1;0;1;1;0;1;"></animate>
                                            </circle>
                                            <path fill="currentColor" opacity="1" d="M263.7,312h-16c-6.6,0-12-5.4-12-12c0-71,77.4-63.9,77.4-107.8c0-20-17.8-40.2-57.4-40.2c-29.1,0-44.3,9.6-59.2,28.7 c-3.9,5-11.1,6-16.2,2.4l-13.1-9.2c-5.6-3.9-6.9-11.8-2.6-17.2c21.2-27.2,46.4-44.7,91.2-44.7c52.3,0,97.4,29.8,97.4,80.2 c0,67.6-77.4,63.5-77.4,107.8C275.7,306.6,270.3,312,263.7,312z">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="1;0;0;0;0;1;"></animate>
                                            </path>
                                            <path fill="currentColor" opacity="0" d="M232.5,134.5l7,168c0.3,6.4,5.6,11.5,12,11.5h9c6.4,0,11.7-5.1,12-11.5l7-168c0.3-6.8-5.2-12.5-12-12.5h-23 C237.7,122,232.2,127.7,232.5,134.5z">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="0;0;1;1;0;0;"></animate>
                                            </path>
                                        </g>
                                    </svg><!-- <i class="fa fa-"></i> -->Personel Investment : $700 </p>
                                <p> OR </p>



                                <p><svg class="svg-inline--fa  fa-w-16 fa-" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="null" role="img" xmlns="" viewBox="0 0 512 512" data-fa-i2svg="" style="width: 12px;">
                                        <g>
                                            <path fill="currentColor" d="M156.5,447.7l-12.6,29.5c-18.7-9.5-35.9-21.2-51.5-34.9l22.7-22.7C127.6,430.5,141.5,440,156.5,447.7z M40.6,272H8.5 c1.4,21.2,5.4,41.7,11.7,61.1L50,321.2C45.1,305.5,41.8,289,40.6,272z M40.6,240c1.4-18.8,5.2-37,11.1-54.1l-29.5-12.6 C14.7,194.3,10,216.7,8.5,240H40.6z M64.3,156.5c7.8-14.9,17.2-28.8,28.1-41.5L69.7,92.3c-13.7,15.6-25.5,32.8-34.9,51.5 L64.3,156.5z M397,419.6c-13.9,12-29.4,22.3-46.1,30.4l11.9,29.8c20.7-9.9,39.8-22.6,56.9-37.6L397,419.6z M115,92.4 c13.9-12,29.4-22.3,46.1-30.4l-11.9-29.8c-20.7,9.9-39.8,22.6-56.8,37.6L115,92.4z M447.7,355.5c-7.8,14.9-17.2,28.8-28.1,41.5 l22.7,22.7c13.7-15.6,25.5-32.9,34.9-51.5L447.7,355.5z M471.4,272c-1.4,18.8-5.2,37-11.1,54.1l29.5,12.6 c7.5-21.1,12.2-43.5,13.6-66.8H471.4z M321.2,462c-15.7,5-32.2,8.2-49.2,9.4v32.1c21.2-1.4,41.7-5.4,61.1-11.7L321.2,462z M240,471.4c-18.8-1.4-37-5.2-54.1-11.1l-12.6,29.5c21.1,7.5,43.5,12.2,66.8,13.6V471.4z M462,190.8c5,15.7,8.2,32.2,9.4,49.2h32.1 c-1.4-21.2-5.4-41.7-11.7-61.1L462,190.8z M92.4,397c-12-13.9-22.3-29.4-30.4-46.1l-29.8,11.9c9.9,20.7,22.6,39.8,37.6,56.9 L92.4,397z M272,40.6c18.8,1.4,36.9,5.2,54.1,11.1l12.6-29.5C317.7,14.7,295.3,10,272,8.5V40.6z M190.8,50 c15.7-5,32.2-8.2,49.2-9.4V8.5c-21.2,1.4-41.7,5.4-61.1,11.7L190.8,50z M442.3,92.3L419.6,115c12,13.9,22.3,29.4,30.5,46.1 l29.8-11.9C470,128.5,457.3,109.4,442.3,92.3z M397,92.4l22.7-22.7c-15.6-13.7-32.8-25.5-51.5-34.9l-12.6,29.5 C370.4,72.1,384.4,81.5,397,92.4z"></path>
                                            <circle fill="currentColor" cx="256" cy="364" r="28">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="r" values="28;14;28;28;14;28;"></animate>
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="1;0;1;1;0;1;"></animate>
                                            </circle>
                                            <path fill="currentColor" opacity="1" d="M263.7,312h-16c-6.6,0-12-5.4-12-12c0-71,77.4-63.9,77.4-107.8c0-20-17.8-40.2-57.4-40.2c-29.1,0-44.3,9.6-59.2,28.7 c-3.9,5-11.1,6-16.2,2.4l-13.1-9.2c-5.6-3.9-6.9-11.8-2.6-17.2c21.2-27.2,46.4-44.7,91.2-44.7c52.3,0,97.4,29.8,97.4,80.2 c0,67.6-77.4,63.5-77.4,107.8C275.7,306.6,270.3,312,263.7,312z">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="1;0;0;0;0;1;"></animate>
                                            </path>
                                            <path fill="currentColor" opacity="0" d="M232.5,134.5l7,168c0.3,6.4,5.6,11.5,12,11.5h9c6.4,0,11.7-5.1,12-11.5l7-168c0.3-6.8-5.2-12.5-12-12.5h-23 C237.7,122,232.2,127.7,232.5,134.5z">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="0;0;1;1;0;0;"></animate>
                                            </path>
                                        </g>
                                    </svg><!-- <i class="fa fa-"></i> -->Structural Investment

                                    : $5000</p>

                                <hr>



                                <!--<h4><strong>$1500+</strong></h4>

									<p><font color="blue"><i class="fa fa-star"></i></font> At least $700 weekly return :</p>

									<hr>-->

                                <p>
                                    <font color="blue"><i class="fa fa-star"></i>
                                    </font>Referal Bonuses :
                                </p>

                                <hr>

                                <table style="width:100%;">

                                    <tbody>
                                        <tr>



                                            <td style="width:50%;">

                                                <strong>Investment Bonus</strong>

                                                <p>First Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">7%</font>
                                                </p>

                                                <p>Second Line:&nbsp;<font color="red">3%</font>
                                                </p>

                                                <p>Third Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">1%</font>
                                                </p>

                                                <p>Fourth Line:&nbsp;&nbsp;&nbsp;<font color="red">0%</font>
                                                </p>

                                                <p>Fifth Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">0%</font>
                                                </p>

                                            </td>

                                            <td style="width:50%;">

                                                <strong>Profit Bonus</strong>

                                                <p>First Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">5%</font>
                                                </p>

                                                <p>Second Line&nbsp;:&nbsp;<font color="red">3%</font>
                                                </p>

                                                <p>Third Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">1%</font>
                                                </p>

                                                <p>Fourth Line&nbsp;:&nbsp;&nbsp;&nbsp;<font color="red">0%</font>
                                                </p>

                                                <p>Fifth Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">0%</font>
                                                </p>

                                            </td>

                                        </tr>

                                    </tbody>
                                </table>




                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4" style="padding-bottom: 50px;">
                        <div class="sign-up-row widget-shadow" style="width:100%; padding:0px;">
                            <h3 style="background-color:#e9e9e9; padding:20px; margin-bottom: 0px;" >
                                <img style="width:70px;" src="images/aurora.png"> AURORA
                            </h3>

                            <div style="padding:20px; text-align:left; background-color: white;">

                                <p>
                                    <font color="blue"><i class="fa fa-star"></i>
                                    </font> Criteria For Join This Plan :
                                </p>


                                <p><svg class="svg-inline--fa  fa-w-16 fa-" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="null" role="img" xmlns="" viewBox="0 0 512 512" data-fa-i2svg="" style="width: 12px;">
                                        <g>
                                            <path fill="currentColor" d="M156.5,447.7l-12.6,29.5c-18.7-9.5-35.9-21.2-51.5-34.9l22.7-22.7C127.6,430.5,141.5,440,156.5,447.7z M40.6,272H8.5 c1.4,21.2,5.4,41.7,11.7,61.1L50,321.2C45.1,305.5,41.8,289,40.6,272z M40.6,240c1.4-18.8,5.2-37,11.1-54.1l-29.5-12.6 C14.7,194.3,10,216.7,8.5,240H40.6z M64.3,156.5c7.8-14.9,17.2-28.8,28.1-41.5L69.7,92.3c-13.7,15.6-25.5,32.8-34.9,51.5 L64.3,156.5z M397,419.6c-13.9,12-29.4,22.3-46.1,30.4l11.9,29.8c20.7-9.9,39.8-22.6,56.9-37.6L397,419.6z M115,92.4 c13.9-12,29.4-22.3,46.1-30.4l-11.9-29.8c-20.7,9.9-39.8,22.6-56.8,37.6L115,92.4z M447.7,355.5c-7.8,14.9-17.2,28.8-28.1,41.5 l22.7,22.7c13.7-15.6,25.5-32.9,34.9-51.5L447.7,355.5z M471.4,272c-1.4,18.8-5.2,37-11.1,54.1l29.5,12.6 c7.5-21.1,12.2-43.5,13.6-66.8H471.4z M321.2,462c-15.7,5-32.2,8.2-49.2,9.4v32.1c21.2-1.4,41.7-5.4,61.1-11.7L321.2,462z M240,471.4c-18.8-1.4-37-5.2-54.1-11.1l-12.6,29.5c21.1,7.5,43.5,12.2,66.8,13.6V471.4z M462,190.8c5,15.7,8.2,32.2,9.4,49.2h32.1 c-1.4-21.2-5.4-41.7-11.7-61.1L462,190.8z M92.4,397c-12-13.9-22.3-29.4-30.4-46.1l-29.8,11.9c9.9,20.7,22.6,39.8,37.6,56.9 L92.4,397z M272,40.6c18.8,1.4,36.9,5.2,54.1,11.1l12.6-29.5C317.7,14.7,295.3,10,272,8.5V40.6z M190.8,50 c15.7-5,32.2-8.2,49.2-9.4V8.5c-21.2,1.4-41.7,5.4-61.1,11.7L190.8,50z M442.3,92.3L419.6,115c12,13.9,22.3,29.4,30.5,46.1 l29.8-11.9C470,128.5,457.3,109.4,442.3,92.3z M397,92.4l22.7-22.7c-15.6-13.7-32.8-25.5-51.5-34.9l-12.6,29.5 C370.4,72.1,384.4,81.5,397,92.4z"></path>
                                            <circle fill="currentColor" cx="256" cy="364" r="28">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="r" values="28;14;28;28;14;28;"></animate>
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="1;0;1;1;0;1;"></animate>
                                            </circle>
                                            <path fill="currentColor" opacity="1" d="M263.7,312h-16c-6.6,0-12-5.4-12-12c0-71,77.4-63.9,77.4-107.8c0-20-17.8-40.2-57.4-40.2c-29.1,0-44.3,9.6-59.2,28.7 c-3.9,5-11.1,6-16.2,2.4l-13.1-9.2c-5.6-3.9-6.9-11.8-2.6-17.2c21.2-27.2,46.4-44.7,91.2-44.7c52.3,0,97.4,29.8,97.4,80.2 c0,67.6-77.4,63.5-77.4,107.8C275.7,306.6,270.3,312,263.7,312z">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="1;0;0;0;0;1;"></animate>
                                            </path>
                                            <path fill="currentColor" opacity="0" d="M232.5,134.5l7,168c0.3,6.4,5.6,11.5,12,11.5h9c6.4,0,11.7-5.1,12-11.5l7-168c0.3-6.8-5.2-12.5-12-12.5h-23 C237.7,122,232.2,127.7,232.5,134.5z">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="0;0;1;1;0;0;"></animate>
                                            </path>
                                        </g>
                                    </svg><!-- <i class="fa fa-"></i> -->Personel Investment : $3000 </p>
                                <p> OR </p>



                                <p><svg class="svg-inline--fa  fa-w-16 fa-" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="null" role="img" xmlns="" viewBox="0 0 512 512" data-fa-i2svg="" style="width: 12px;">
                                        <g>
                                            <path fill="currentColor" d="M156.5,447.7l-12.6,29.5c-18.7-9.5-35.9-21.2-51.5-34.9l22.7-22.7C127.6,430.5,141.5,440,156.5,447.7z M40.6,272H8.5 c1.4,21.2,5.4,41.7,11.7,61.1L50,321.2C45.1,305.5,41.8,289,40.6,272z M40.6,240c1.4-18.8,5.2-37,11.1-54.1l-29.5-12.6 C14.7,194.3,10,216.7,8.5,240H40.6z M64.3,156.5c7.8-14.9,17.2-28.8,28.1-41.5L69.7,92.3c-13.7,15.6-25.5,32.8-34.9,51.5 L64.3,156.5z M397,419.6c-13.9,12-29.4,22.3-46.1,30.4l11.9,29.8c20.7-9.9,39.8-22.6,56.9-37.6L397,419.6z M115,92.4 c13.9-12,29.4-22.3,46.1-30.4l-11.9-29.8c-20.7,9.9-39.8,22.6-56.8,37.6L115,92.4z M447.7,355.5c-7.8,14.9-17.2,28.8-28.1,41.5 l22.7,22.7c13.7-15.6,25.5-32.9,34.9-51.5L447.7,355.5z M471.4,272c-1.4,18.8-5.2,37-11.1,54.1l29.5,12.6 c7.5-21.1,12.2-43.5,13.6-66.8H471.4z M321.2,462c-15.7,5-32.2,8.2-49.2,9.4v32.1c21.2-1.4,41.7-5.4,61.1-11.7L321.2,462z M240,471.4c-18.8-1.4-37-5.2-54.1-11.1l-12.6,29.5c21.1,7.5,43.5,12.2,66.8,13.6V471.4z M462,190.8c5,15.7,8.2,32.2,9.4,49.2h32.1 c-1.4-21.2-5.4-41.7-11.7-61.1L462,190.8z M92.4,397c-12-13.9-22.3-29.4-30.4-46.1l-29.8,11.9c9.9,20.7,22.6,39.8,37.6,56.9 L92.4,397z M272,40.6c18.8,1.4,36.9,5.2,54.1,11.1l12.6-29.5C317.7,14.7,295.3,10,272,8.5V40.6z M190.8,50 c15.7-5,32.2-8.2,49.2-9.4V8.5c-21.2,1.4-41.7,5.4-61.1,11.7L190.8,50z M442.3,92.3L419.6,115c12,13.9,22.3,29.4,30.5,46.1 l29.8-11.9C470,128.5,457.3,109.4,442.3,92.3z M397,92.4l22.7-22.7c-15.6-13.7-32.8-25.5-51.5-34.9l-12.6,29.5 C370.4,72.1,384.4,81.5,397,92.4z"></path>
                                            <circle fill="currentColor" cx="256" cy="364" r="28">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="r" values="28;14;28;28;14;28;"></animate>
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="1;0;1;1;0;1;"></animate>
                                            </circle>
                                            <path fill="currentColor" opacity="1" d="M263.7,312h-16c-6.6,0-12-5.4-12-12c0-71,77.4-63.9,77.4-107.8c0-20-17.8-40.2-57.4-40.2c-29.1,0-44.3,9.6-59.2,28.7 c-3.9,5-11.1,6-16.2,2.4l-13.1-9.2c-5.6-3.9-6.9-11.8-2.6-17.2c21.2-27.2,46.4-44.7,91.2-44.7c52.3,0,97.4,29.8,97.4,80.2 c0,67.6-77.4,63.5-77.4,107.8C275.7,306.6,270.3,312,263.7,312z">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="1;0;0;0;0;1;"></animate>
                                            </path>
                                            <path fill="currentColor" opacity="0" d="M232.5,134.5l7,168c0.3,6.4,5.6,11.5,12,11.5h9c6.4,0,11.7-5.1,12-11.5l7-168c0.3-6.8-5.2-12.5-12-12.5h-23 C237.7,122,232.2,127.7,232.5,134.5z">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="0;0;1;1;0;0;"></animate>
                                            </path>
                                        </g>
                                    </svg><!-- <i class="fa fa-"></i> -->Structural Investment

                                    : $30000</p>

                                <hr>
                                <p>
                                    <font color="blue"><i class="fa fa-star"></i>
                                    </font>Referal Bonuses :
                                </p>

                                <hr>

                                <table style="width:100%;">

                                    <tbody>
                                        <tr>



                                            <td style="width:50%;">

                                                <strong>Investment Bonus</strong>

                                                <p>First Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">10%</font>
                                                </p>

                                                <p>Second Line:&nbsp;<font color="red">3%</font>
                                                </p>

                                                <p>Third Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">1%</font>
                                                </p>

                                                <p>Fourth Line:&nbsp;&nbsp;&nbsp;<font color="red">1%</font>
                                                </p>

                                                <p>Fifth Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">1%</font>
                                                </p>

                                            </td>

                                            <td style="width:50%;">

                                                <strong>Profit Bonus</strong>

                                                <p>First Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">7%</font>
                                                </p>

                                                <p>Second Line&nbsp;:&nbsp;<font color="red">3%</font>
                                                </p>

                                                <p>Third Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">1%</font>
                                                </p>

                                                <p>Fourth Line&nbsp;:&nbsp;&nbsp;&nbsp;<font color="red">1%</font>
                                                </p>

                                                <p>Fifth Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">1%</font>
                                                </p>

                                            </td>

                                        </tr>

                                    </tbody>
                                </table>




                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="sign-up-row widget-shadow" style="width:100%; padding:0px; ">

                            <h3 style="background-color:#e9e9e9; padding:20px; margin-bottom: 0px;">
                              <img style="width:70px;" src="images/cullinan.png"> CULLINAN
                            </h3>

                            <div style="padding:20px; text-align:left; background-color: white;">

                                <p>
                                    <font color="blue"><i class="fa fa-star"></i>
                                    </font> Criteria For Join This Plan :
                                </p>
                                <p><svg class="svg-inline--fa  fa-w-16 fa-" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="null" role="img" xmlns="" viewBox="0 0 512 512" data-fa-i2svg="" style="width: 12px">
                                        <g>
                                            <path fill="currentColor" d="M156.5,447.7l-12.6,29.5c-18.7-9.5-35.9-21.2-51.5-34.9l22.7-22.7C127.6,430.5,141.5,440,156.5,447.7z M40.6,272H8.5 c1.4,21.2,5.4,41.7,11.7,61.1L50,321.2C45.1,305.5,41.8,289,40.6,272z M40.6,240c1.4-18.8,5.2-37,11.1-54.1l-29.5-12.6 C14.7,194.3,10,216.7,8.5,240H40.6z M64.3,156.5c7.8-14.9,17.2-28.8,28.1-41.5L69.7,92.3c-13.7,15.6-25.5,32.8-34.9,51.5 L64.3,156.5z M397,419.6c-13.9,12-29.4,22.3-46.1,30.4l11.9,29.8c20.7-9.9,39.8-22.6,56.9-37.6L397,419.6z M115,92.4 c13.9-12,29.4-22.3,46.1-30.4l-11.9-29.8c-20.7,9.9-39.8,22.6-56.8,37.6L115,92.4z M447.7,355.5c-7.8,14.9-17.2,28.8-28.1,41.5 l22.7,22.7c13.7-15.6,25.5-32.9,34.9-51.5L447.7,355.5z M471.4,272c-1.4,18.8-5.2,37-11.1,54.1l29.5,12.6 c7.5-21.1,12.2-43.5,13.6-66.8H471.4z M321.2,462c-15.7,5-32.2,8.2-49.2,9.4v32.1c21.2-1.4,41.7-5.4,61.1-11.7L321.2,462z M240,471.4c-18.8-1.4-37-5.2-54.1-11.1l-12.6,29.5c21.1,7.5,43.5,12.2,66.8,13.6V471.4z M462,190.8c5,15.7,8.2,32.2,9.4,49.2h32.1 c-1.4-21.2-5.4-41.7-11.7-61.1L462,190.8z M92.4,397c-12-13.9-22.3-29.4-30.4-46.1l-29.8,11.9c9.9,20.7,22.6,39.8,37.6,56.9 L92.4,397z M272,40.6c18.8,1.4,36.9,5.2,54.1,11.1l12.6-29.5C317.7,14.7,295.3,10,272,8.5V40.6z M190.8,50 c15.7-5,32.2-8.2,49.2-9.4V8.5c-21.2,1.4-41.7,5.4-61.1,11.7L190.8,50z M442.3,92.3L419.6,115c12,13.9,22.3,29.4,30.5,46.1 l29.8-11.9C470,128.5,457.3,109.4,442.3,92.3z M397,92.4l22.7-22.7c-15.6-13.7-32.8-25.5-51.5-34.9l-12.6,29.5 C370.4,72.1,384.4,81.5,397,92.4z"></path>
                                            <circle fill="currentColor" cx="256" cy="364" r="28">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="r" values="28;14;28;28;14;28;"></animate>
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="1;0;1;1;0;1;"></animate>
                                            </circle>
                                            <path fill="currentColor" opacity="1" d="M263.7,312h-16c-6.6,0-12-5.4-12-12c0-71,77.4-63.9,77.4-107.8c0-20-17.8-40.2-57.4-40.2c-29.1,0-44.3,9.6-59.2,28.7 c-3.9,5-11.1,6-16.2,2.4l-13.1-9.2c-5.6-3.9-6.9-11.8-2.6-17.2c21.2-27.2,46.4-44.7,91.2-44.7c52.3,0,97.4,29.8,97.4,80.2 c0,67.6-77.4,63.5-77.4,107.8C275.7,306.6,270.3,312,263.7,312z">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="1;0;0;0;0;1;"></animate>
                                            </path>
                                            <path fill="currentColor" opacity="0" d="M232.5,134.5l7,168c0.3,6.4,5.6,11.5,12,11.5h9c6.4,0,11.7-5.1,12-11.5l7-168c0.3-6.8-5.2-12.5-12-12.5h-23 C237.7,122,232.2,127.7,232.5,134.5z">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="0;0;1;1;0;0;"></animate>
                                            </path>
                                        </g>
                                    </svg><!-- <i class="fa fa-"></i> -->Personel Investment : $10000 </p>
                                <p> OR </p>
                                <p><svg class="svg-inline--fa  fa-w-16 fa-" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="null" role="img" xmlns="" viewBox="0 0 512 512" data-fa-i2svg="" style="width: 12px">
                                        <g>
                                            <path fill="currentColor" d="M156.5,447.7l-12.6,29.5c-18.7-9.5-35.9-21.2-51.5-34.9l22.7-22.7C127.6,430.5,141.5,440,156.5,447.7z M40.6,272H8.5 c1.4,21.2,5.4,41.7,11.7,61.1L50,321.2C45.1,305.5,41.8,289,40.6,272z M40.6,240c1.4-18.8,5.2-37,11.1-54.1l-29.5-12.6 C14.7,194.3,10,216.7,8.5,240H40.6z M64.3,156.5c7.8-14.9,17.2-28.8,28.1-41.5L69.7,92.3c-13.7,15.6-25.5,32.8-34.9,51.5 L64.3,156.5z M397,419.6c-13.9,12-29.4,22.3-46.1,30.4l11.9,29.8c20.7-9.9,39.8-22.6,56.9-37.6L397,419.6z M115,92.4 c13.9-12,29.4-22.3,46.1-30.4l-11.9-29.8c-20.7,9.9-39.8,22.6-56.8,37.6L115,92.4z M447.7,355.5c-7.8,14.9-17.2,28.8-28.1,41.5 l22.7,22.7c13.7-15.6,25.5-32.9,34.9-51.5L447.7,355.5z M471.4,272c-1.4,18.8-5.2,37-11.1,54.1l29.5,12.6 c7.5-21.1,12.2-43.5,13.6-66.8H471.4z M321.2,462c-15.7,5-32.2,8.2-49.2,9.4v32.1c21.2-1.4,41.7-5.4,61.1-11.7L321.2,462z M240,471.4c-18.8-1.4-37-5.2-54.1-11.1l-12.6,29.5c21.1,7.5,43.5,12.2,66.8,13.6V471.4z M462,190.8c5,15.7,8.2,32.2,9.4,49.2h32.1 c-1.4-21.2-5.4-41.7-11.7-61.1L462,190.8z M92.4,397c-12-13.9-22.3-29.4-30.4-46.1l-29.8,11.9c9.9,20.7,22.6,39.8,37.6,56.9 L92.4,397z M272,40.6c18.8,1.4,36.9,5.2,54.1,11.1l12.6-29.5C317.7,14.7,295.3,10,272,8.5V40.6z M190.8,50 c15.7-5,32.2-8.2,49.2-9.4V8.5c-21.2,1.4-41.7,5.4-61.1,11.7L190.8,50z M442.3,92.3L419.6,115c12,13.9,22.3,29.4,30.5,46.1 l29.8-11.9C470,128.5,457.3,109.4,442.3,92.3z M397,92.4l22.7-22.7c-15.6-13.7-32.8-25.5-51.5-34.9l-12.6,29.5 C370.4,72.1,384.4,81.5,397,92.4z"></path>
                                            <circle fill="currentColor" cx="256" cy="364" r="28">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="r" values="28;14;28;28;14;28;"></animate>
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="1;0;1;1;0;1;"></animate>
                                            </circle>
                                            <path fill="currentColor" opacity="1" d="M263.7,312h-16c-6.6,0-12-5.4-12-12c0-71,77.4-63.9,77.4-107.8c0-20-17.8-40.2-57.4-40.2c-29.1,0-44.3,9.6-59.2,28.7 c-3.9,5-11.1,6-16.2,2.4l-13.1-9.2c-5.6-3.9-6.9-11.8-2.6-17.2c21.2-27.2,46.4-44.7,91.2-44.7c52.3,0,97.4,29.8,97.4,80.2 c0,67.6-77.4,63.5-77.4,107.8C275.7,306.6,270.3,312,263.7,312z">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="1;0;0;0;0;1;"></animate>
                                            </path>
                                            <path fill="currentColor" opacity="0" d="M232.5,134.5l7,168c0.3,6.4,5.6,11.5,12,11.5h9c6.4,0,11.7-5.1,12-11.5l7-168c0.3-6.8-5.2-12.5-12-12.5h-23 C237.7,122,232.2,127.7,232.5,134.5z">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="0;0;1;1;0;0;"></animate>
                                            </path>
                                        </g>
                                    </svg><!-- <i class="fa fa-"></i> -->Structural Investment

                                    : $100000</p>
                                <hr>
                                <p>
                                    <font color="blue"><i class="fa fa-star"></i>
                                    </font>Referal Bonuses :
                                </p>
                                <hr>
                                <table style="width:100%;">
                                    <tbody>
                                        <tr>



                                            <td style="width:50%;">

                                                <strong>Investment Bonus</strong>

                                                <p>First Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">10%</font>
                                                </p>

                                                <p>Second Line:&nbsp;<font color="red">5%</font>
                                                </p>

                                                <p>Third Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">3%</font>
                                                </p>

                                                <p>Fourth Line:&nbsp;&nbsp;&nbsp;<font color="red">1%</font>
                                                </p>

                                                <p>Fifth Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">1%</font>
                                                </p>

                                            </td>

                                            <td style="width:50%;">

                                                <strong>Profit Bonus</strong>

                                                <p>First Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">8%</font>
                                                </p>

                                                <p>Second Line&nbsp;:&nbsp;<font color="red">5%</font>
                                                </p>

                                                <p>Third Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">3%</font>
                                                </p>

                                                <p>Fourth Line&nbsp;:&nbsp;&nbsp;&nbsp;<font color="red">1%</font>
                                                </p>

                                                <p>Fifth Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">1%</font>
                                                </p>

                                            </td>

                                        </tr>

                                    </tbody>
                                </table>




                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4">

                        <div class="sign-up-row widget-shadow" style="width:100%; padding:0px;">

                            <h3 style="background-color:#e9e9e9; padding:20px; margin-bottom: 0px;">

                                <img style="width:70px;" src="images/sancy.png"> SANCY
                            </h3>

                            <div style="padding:20px; text-align:left; background-color: white;">

                                <p>
                                    <font color="blue"><i class="fa fa-star"></i>
                                    </font> Criteria For Join This Plan :
                                </p>
                                <p><svg class="svg-inline--fa  fa-w-16 fa-" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="null" role="img" xmlns="" viewBox="0 0 512 512" data-fa-i2svg="" style="width: 12px;">
                                        <g>
                                            <path fill="currentColor" d="M156.5,447.7l-12.6,29.5c-18.7-9.5-35.9-21.2-51.5-34.9l22.7-22.7C127.6,430.5,141.5,440,156.5,447.7z M40.6,272H8.5 c1.4,21.2,5.4,41.7,11.7,61.1L50,321.2C45.1,305.5,41.8,289,40.6,272z M40.6,240c1.4-18.8,5.2-37,11.1-54.1l-29.5-12.6 C14.7,194.3,10,216.7,8.5,240H40.6z M64.3,156.5c7.8-14.9,17.2-28.8,28.1-41.5L69.7,92.3c-13.7,15.6-25.5,32.8-34.9,51.5 L64.3,156.5z M397,419.6c-13.9,12-29.4,22.3-46.1,30.4l11.9,29.8c20.7-9.9,39.8-22.6,56.9-37.6L397,419.6z M115,92.4 c13.9-12,29.4-22.3,46.1-30.4l-11.9-29.8c-20.7,9.9-39.8,22.6-56.8,37.6L115,92.4z M447.7,355.5c-7.8,14.9-17.2,28.8-28.1,41.5 l22.7,22.7c13.7-15.6,25.5-32.9,34.9-51.5L447.7,355.5z M471.4,272c-1.4,18.8-5.2,37-11.1,54.1l29.5,12.6 c7.5-21.1,12.2-43.5,13.6-66.8H471.4z M321.2,462c-15.7,5-32.2,8.2-49.2,9.4v32.1c21.2-1.4,41.7-5.4,61.1-11.7L321.2,462z M240,471.4c-18.8-1.4-37-5.2-54.1-11.1l-12.6,29.5c21.1,7.5,43.5,12.2,66.8,13.6V471.4z M462,190.8c5,15.7,8.2,32.2,9.4,49.2h32.1 c-1.4-21.2-5.4-41.7-11.7-61.1L462,190.8z M92.4,397c-12-13.9-22.3-29.4-30.4-46.1l-29.8,11.9c9.9,20.7,22.6,39.8,37.6,56.9 L92.4,397z M272,40.6c18.8,1.4,36.9,5.2,54.1,11.1l12.6-29.5C317.7,14.7,295.3,10,272,8.5V40.6z M190.8,50 c15.7-5,32.2-8.2,49.2-9.4V8.5c-21.2,1.4-41.7,5.4-61.1,11.7L190.8,50z M442.3,92.3L419.6,115c12,13.9,22.3,29.4,30.5,46.1 l29.8-11.9C470,128.5,457.3,109.4,442.3,92.3z M397,92.4l22.7-22.7c-15.6-13.7-32.8-25.5-51.5-34.9l-12.6,29.5 C370.4,72.1,384.4,81.5,397,92.4z"></path>
                                            <circle fill="currentColor" cx="256" cy="364" r="28">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="r" values="28;14;28;28;14;28;"></animate>
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="1;0;1;1;0;1;"></animate>
                                            </circle>
                                            <path fill="currentColor" opacity="1" d="M263.7,312h-16c-6.6,0-12-5.4-12-12c0-71,77.4-63.9,77.4-107.8c0-20-17.8-40.2-57.4-40.2c-29.1,0-44.3,9.6-59.2,28.7 c-3.9,5-11.1,6-16.2,2.4l-13.1-9.2c-5.6-3.9-6.9-11.8-2.6-17.2c21.2-27.2,46.4-44.7,91.2-44.7c52.3,0,97.4,29.8,97.4,80.2 c0,67.6-77.4,63.5-77.4,107.8C275.7,306.6,270.3,312,263.7,312z">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="1;0;0;0;0;1;"></animate>
                                            </path>
                                            <path fill="currentColor" opacity="0" d="M232.5,134.5l7,168c0.3,6.4,5.6,11.5,12,11.5h9c6.4,0,11.7-5.1,12-11.5l7-168c0.3-6.8-5.2-12.5-12-12.5h-23 C237.7,122,232.2,127.7,232.5,134.5z">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="0;0;1;1;0;0;"></animate>
                                            </path>
                                        </g>
                                    </svg><!-- <i class="fa fa-"></i> -->Personel Investment : $30000 </p>
                                <p> OR </p>
                                <p><svg class="svg-inline--fa  fa-w-16 fa-" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="null" role="img" xmlns="" viewBox="0 0 512 512" data-fa-i2svg="" style="width: 12px;">
                                        <g>
                                            <path fill="currentColor" d="M156.5,447.7l-12.6,29.5c-18.7-9.5-35.9-21.2-51.5-34.9l22.7-22.7C127.6,430.5,141.5,440,156.5,447.7z M40.6,272H8.5 c1.4,21.2,5.4,41.7,11.7,61.1L50,321.2C45.1,305.5,41.8,289,40.6,272z M40.6,240c1.4-18.8,5.2-37,11.1-54.1l-29.5-12.6 C14.7,194.3,10,216.7,8.5,240H40.6z M64.3,156.5c7.8-14.9,17.2-28.8,28.1-41.5L69.7,92.3c-13.7,15.6-25.5,32.8-34.9,51.5 L64.3,156.5z M397,419.6c-13.9,12-29.4,22.3-46.1,30.4l11.9,29.8c20.7-9.9,39.8-22.6,56.9-37.6L397,419.6z M115,92.4 c13.9-12,29.4-22.3,46.1-30.4l-11.9-29.8c-20.7,9.9-39.8,22.6-56.8,37.6L115,92.4z M447.7,355.5c-7.8,14.9-17.2,28.8-28.1,41.5 l22.7,22.7c13.7-15.6,25.5-32.9,34.9-51.5L447.7,355.5z M471.4,272c-1.4,18.8-5.2,37-11.1,54.1l29.5,12.6 c7.5-21.1,12.2-43.5,13.6-66.8H471.4z M321.2,462c-15.7,5-32.2,8.2-49.2,9.4v32.1c21.2-1.4,41.7-5.4,61.1-11.7L321.2,462z M240,471.4c-18.8-1.4-37-5.2-54.1-11.1l-12.6,29.5c21.1,7.5,43.5,12.2,66.8,13.6V471.4z M462,190.8c5,15.7,8.2,32.2,9.4,49.2h32.1 c-1.4-21.2-5.4-41.7-11.7-61.1L462,190.8z M92.4,397c-12-13.9-22.3-29.4-30.4-46.1l-29.8,11.9c9.9,20.7,22.6,39.8,37.6,56.9 L92.4,397z M272,40.6c18.8,1.4,36.9,5.2,54.1,11.1l12.6-29.5C317.7,14.7,295.3,10,272,8.5V40.6z M190.8,50 c15.7-5,32.2-8.2,49.2-9.4V8.5c-21.2,1.4-41.7,5.4-61.1,11.7L190.8,50z M442.3,92.3L419.6,115c12,13.9,22.3,29.4,30.5,46.1 l29.8-11.9C470,128.5,457.3,109.4,442.3,92.3z M397,92.4l22.7-22.7c-15.6-13.7-32.8-25.5-51.5-34.9l-12.6,29.5 C370.4,72.1,384.4,81.5,397,92.4z"></path>
                                            <circle fill="currentColor" cx="256" cy="364" r="28">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="r" values="28;14;28;28;14;28;"></animate>
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="1;0;1;1;0;1;"></animate>
                                            </circle>
                                            <path fill="currentColor" opacity="1" d="M263.7,312h-16c-6.6,0-12-5.4-12-12c0-71,77.4-63.9,77.4-107.8c0-20-17.8-40.2-57.4-40.2c-29.1,0-44.3,9.6-59.2,28.7 c-3.9,5-11.1,6-16.2,2.4l-13.1-9.2c-5.6-3.9-6.9-11.8-2.6-17.2c21.2-27.2,46.4-44.7,91.2-44.7c52.3,0,97.4,29.8,97.4,80.2 c0,67.6-77.4,63.5-77.4,107.8C275.7,306.6,270.3,312,263.7,312z">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="1;0;0;0;0;1;"></animate>
                                            </path>
                                            <path fill="currentColor" opacity="0" d="M232.5,134.5l7,168c0.3,6.4,5.6,11.5,12,11.5h9c6.4,0,11.7-5.1,12-11.5l7-168c0.3-6.8-5.2-12.5-12-12.5h-23 C237.7,122,232.2,127.7,232.5,134.5z">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="0;0;1;1;0;0;"></animate>
                                            </path>
                                        </g>
                                    </svg><!-- <i class="fa fa-"></i> -->Structural Investment

                                    : $500000</p>
                                <hr>
                                 <p>
                                    <font color="blue"><i class="fa fa-star"></i>
                                    </font>Referal Bonuses :
                                </p>

                                <hr>

                                <table style="width:100%;">

                                    <tbody>
                                        <tr>



                                            <td style="width:50%;">

                                                <strong>Investment Bonus</strong>

                                                <p>First Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">12%</font>
                                                </p>

                                                <p>Second Line:&nbsp;<font color="red">5%</font>
                                                </p>

                                                <p>Third Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">3%</font>
                                                </p>

                                                <p>Fourth Line:&nbsp;&nbsp;&nbsp;<font color="red">3%</font>
                                                </p>

                                                <p>Fifth Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">3%</font>
                                                </p>

                                            </td>

                                            <td style="width:50%;">

                                                <strong>Profit Bonus</strong>

                                                <p>First Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">10%</font>
                                                </p>

                                                <p>Second Line&nbsp;:&nbsp;<font color="red">5%</font>
                                                </p>

                                                <p>Third Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">3%</font>
                                                </p>

                                                <p>Fourth Line&nbsp;:&nbsp;&nbsp;&nbsp;<font color="red">3%</font>
                                                </p>

                                                <p>Fifth Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">3%</font>
                                                </p>

                                            </td>

                                        </tr>

                                    </tbody>
                                </table>




                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="sign-up-row widget-shadow" style="width:100%; padding:0px;">
                            <h3 style="background-color:#e9e9e9; padding:20px; margin-bottom: 0px;">
                                <img style="width:70px;" src="images/koh-e-noor.png"> KOH I NOOR
                            </h3>
                            <div style="padding:20px; text-align:left; background-color: white;">
                                <p>
                                    <font color="blue"><i class="fa fa-star"></i>
                                    </font> Criteria For Join This Plan :
                                </p>
                                <p><svg class="svg-inline--fa  fa-w-16 fa-" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="null" role="img" xmlns="" viewBox="0 0 512 512" data-fa-i2svg="" style="width: 12px;">
                                        <g>
                                            <path fill="currentColor" d="M156.5,447.7l-12.6,29.5c-18.7-9.5-35.9-21.2-51.5-34.9l22.7-22.7C127.6,430.5,141.5,440,156.5,447.7z M40.6,272H8.5 c1.4,21.2,5.4,41.7,11.7,61.1L50,321.2C45.1,305.5,41.8,289,40.6,272z M40.6,240c1.4-18.8,5.2-37,11.1-54.1l-29.5-12.6 C14.7,194.3,10,216.7,8.5,240H40.6z M64.3,156.5c7.8-14.9,17.2-28.8,28.1-41.5L69.7,92.3c-13.7,15.6-25.5,32.8-34.9,51.5 L64.3,156.5z M397,419.6c-13.9,12-29.4,22.3-46.1,30.4l11.9,29.8c20.7-9.9,39.8-22.6,56.9-37.6L397,419.6z M115,92.4 c13.9-12,29.4-22.3,46.1-30.4l-11.9-29.8c-20.7,9.9-39.8,22.6-56.8,37.6L115,92.4z M447.7,355.5c-7.8,14.9-17.2,28.8-28.1,41.5 l22.7,22.7c13.7-15.6,25.5-32.9,34.9-51.5L447.7,355.5z M471.4,272c-1.4,18.8-5.2,37-11.1,54.1l29.5,12.6 c7.5-21.1,12.2-43.5,13.6-66.8H471.4z M321.2,462c-15.7,5-32.2,8.2-49.2,9.4v32.1c21.2-1.4,41.7-5.4,61.1-11.7L321.2,462z M240,471.4c-18.8-1.4-37-5.2-54.1-11.1l-12.6,29.5c21.1,7.5,43.5,12.2,66.8,13.6V471.4z M462,190.8c5,15.7,8.2,32.2,9.4,49.2h32.1 c-1.4-21.2-5.4-41.7-11.7-61.1L462,190.8z M92.4,397c-12-13.9-22.3-29.4-30.4-46.1l-29.8,11.9c9.9,20.7,22.6,39.8,37.6,56.9 L92.4,397z M272,40.6c18.8,1.4,36.9,5.2,54.1,11.1l12.6-29.5C317.7,14.7,295.3,10,272,8.5V40.6z M190.8,50 c15.7-5,32.2-8.2,49.2-9.4V8.5c-21.2,1.4-41.7,5.4-61.1,11.7L190.8,50z M442.3,92.3L419.6,115c12,13.9,22.3,29.4,30.5,46.1 l29.8-11.9C470,128.5,457.3,109.4,442.3,92.3z M397,92.4l22.7-22.7c-15.6-13.7-32.8-25.5-51.5-34.9l-12.6,29.5 C370.4,72.1,384.4,81.5,397,92.4z"></path>
                                            <circle fill="currentColor" cx="256" cy="364" r="28">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="r" values="28;14;28;28;14;28;"></animate>
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="1;0;1;1;0;1;"></animate>
                                            </circle>
                                            <path fill="currentColor" opacity="1" d="M263.7,312h-16c-6.6,0-12-5.4-12-12c0-71,77.4-63.9,77.4-107.8c0-20-17.8-40.2-57.4-40.2c-29.1,0-44.3,9.6-59.2,28.7 c-3.9,5-11.1,6-16.2,2.4l-13.1-9.2c-5.6-3.9-6.9-11.8-2.6-17.2c21.2-27.2,46.4-44.7,91.2-44.7c52.3,0,97.4,29.8,97.4,80.2 c0,67.6-77.4,63.5-77.4,107.8C275.7,306.6,270.3,312,263.7,312z">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="1;0;0;0;0;1;"></animate>
                                            </path>
                                            <path fill="currentColor" opacity="0" d="M232.5,134.5l7,168c0.3,6.4,5.6,11.5,12,11.5h9c6.4,0,11.7-5.1,12-11.5l7-168c0.3-6.8-5.2-12.5-12-12.5h-23 C237.7,122,232.2,127.7,232.5,134.5z">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="0;0;1;1;0;0;"></animate>
                                            </path>
                                        </g>
                                    </svg><!-- <i class="fa fa-"></i> -->Personel Investment : $50000 </p>
                                <p> OR </p>
                                <p><svg class="svg-inline--fa  fa-w-16 fa-" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="null" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="width: 12px;">
                                        <g>
                                            <path fill="currentColor" d="M156.5,447.7l-12.6,29.5c-18.7-9.5-35.9-21.2-51.5-34.9l22.7-22.7C127.6,430.5,141.5,440,156.5,447.7z M40.6,272H8.5 c1.4,21.2,5.4,41.7,11.7,61.1L50,321.2C45.1,305.5,41.8,289,40.6,272z M40.6,240c1.4-18.8,5.2-37,11.1-54.1l-29.5-12.6 C14.7,194.3,10,216.7,8.5,240H40.6z M64.3,156.5c7.8-14.9,17.2-28.8,28.1-41.5L69.7,92.3c-13.7,15.6-25.5,32.8-34.9,51.5 L64.3,156.5z M397,419.6c-13.9,12-29.4,22.3-46.1,30.4l11.9,29.8c20.7-9.9,39.8-22.6,56.9-37.6L397,419.6z M115,92.4 c13.9-12,29.4-22.3,46.1-30.4l-11.9-29.8c-20.7,9.9-39.8,22.6-56.8,37.6L115,92.4z M447.7,355.5c-7.8,14.9-17.2,28.8-28.1,41.5 l22.7,22.7c13.7-15.6,25.5-32.9,34.9-51.5L447.7,355.5z M471.4,272c-1.4,18.8-5.2,37-11.1,54.1l29.5,12.6 c7.5-21.1,12.2-43.5,13.6-66.8H471.4z M321.2,462c-15.7,5-32.2,8.2-49.2,9.4v32.1c21.2-1.4,41.7-5.4,61.1-11.7L321.2,462z M240,471.4c-18.8-1.4-37-5.2-54.1-11.1l-12.6,29.5c21.1,7.5,43.5,12.2,66.8,13.6V471.4z M462,190.8c5,15.7,8.2,32.2,9.4,49.2h32.1 c-1.4-21.2-5.4-41.7-11.7-61.1L462,190.8z M92.4,397c-12-13.9-22.3-29.4-30.4-46.1l-29.8,11.9c9.9,20.7,22.6,39.8,37.6,56.9 L92.4,397z M272,40.6c18.8,1.4,36.9,5.2,54.1,11.1l12.6-29.5C317.7,14.7,295.3,10,272,8.5V40.6z M190.8,50 c15.7-5,32.2-8.2,49.2-9.4V8.5c-21.2,1.4-41.7,5.4-61.1,11.7L190.8,50z M442.3,92.3L419.6,115c12,13.9,22.3,29.4,30.5,46.1 l29.8-11.9C470,128.5,457.3,109.4,442.3,92.3z M397,92.4l22.7-22.7c-15.6-13.7-32.8-25.5-51.5-34.9l-12.6,29.5 C370.4,72.1,384.4,81.5,397,92.4z"></path>
                                            <circle fill="currentColor" cx="256" cy="364" r="28">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="r" values="28;14;28;28;14;28;"></animate>
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="1;0;1;1;0;1;"></animate>
                                            </circle>
                                            <path fill="currentColor" opacity="1" d="M263.7,312h-16c-6.6,0-12-5.4-12-12c0-71,77.4-63.9,77.4-107.8c0-20-17.8-40.2-57.4-40.2c-29.1,0-44.3,9.6-59.2,28.7 c-3.9,5-11.1,6-16.2,2.4l-13.1-9.2c-5.6-3.9-6.9-11.8-2.6-17.2c21.2-27.2,46.4-44.7,91.2-44.7c52.3,0,97.4,29.8,97.4,80.2 c0,67.6-77.4,63.5-77.4,107.8C275.7,306.6,270.3,312,263.7,312z">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="1;0;0;0;0;1;"></animate>
                                            </path>
                                            <path fill="currentColor" opacity="0" d="M232.5,134.5l7,168c0.3,6.4,5.6,11.5,12,11.5h9c6.4,0,11.7-5.1,12-11.5l7-168c0.3-6.8-5.2-12.5-12-12.5h-23 C237.7,122,232.2,127.7,232.5,134.5z">
                                                <animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="0;0;1;1;0;0;"></animate>
                                            </path>
                                        </g>
                                    </svg><!-- <i class="fa fa-"></i> -->Structural Investment

                                    : $1000000</p>
                                <hr>
                                <p>
                                    <font color="blue"><i class="fa fa-star"></i>
                                    </font>Referal Bonuses :
                                </p>

                                <hr>

                                <table style="width:100%;">

                                    <tbody>
                                        <tr>



                                            <td style="width:50%;">

                                                <strong>Investment Bonus</strong>

                                                <p>First Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">15%</font>
                                                </p>

                                                <p>Second Line:&nbsp;<font color="red">7%</font>
                                                </p>

                                                <p>Third Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">3%</font>
                                                </p>

                                                <p>Fourth Line:&nbsp;&nbsp;&nbsp;<font color="red">3%</font>
                                                </p>

                                                <p>Fifth Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">3%</font>
                                                </p>

                                            </td>

                                            <td style="width:50%;">

                                                <strong>Profit Bonus</strong>

                                                <p>First Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">12%</font>
                                                </p>

                                                <p>Second Line&nbsp;:&nbsp;<font color="red">5%</font>
                                                </p>

                                                <p>Third Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">3%</font>
                                                </p>

                                                <p>Fourth Line&nbsp;:&nbsp;&nbsp;&nbsp;<font color="red">3%</font>
                                                </p>

                                                <p>Fifth Line&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">3%</font>
                                                </p>

                                            </td>

                                        </tr>

                                    </tbody>
                                </table>




                            </div>

                        </div>

                    </div>



                    <!-- edit Plans Modal -->

                    <div id="editplansModal6" class="modal fade" role="dialog">

                        <div class="modal-dialog">

                            <!-- Modal content-->

                            <div class="modal-content">

                                <div class="modal-header">

                                    <button type="button" class="close" data-dismiss="modal">×</button>

                                    <h4 class="modal-title" style="text-align:center;">Add new plan / package</h4>

                                </div>

                                <div class="modal-body">

                                    <form style="padding:3px;" role="form" method="post" action="https://www.b4uglobal.com/dashboard/updateplan">

                                        <label>Plan name</label><br>

                                        <input style="padding:5px;" class="form-control" value="KOH I NOOR" type="text" name="name" required=""><br>

                                        <label>Plan Personel Joining Limit </label><br>

                                        <input style="padding:5px;" class="form-control" value="50000" type="text" name="personel_investment_limit" required=""><br>

                                        <label>Plan Structural Joining Limit</label><br>

                                        <input style="padding:5px;" class="form-control" value="1000000" type="text" name="structural_investment_limit" required=""><br>

                                        <label>Plan Weekly Limit</label><br>

                                        <input style="padding:5px;" class="form-control" value="100000" type="text" name="price" required=""><br>

                                        <label>Plan Weekly expected return (ROI)/ Plan Weekly Withdrawal Limit </label><br>

                                        <input style="padding:5px;" class="form-control" placeholder="Enter expected return" value="5000" type="text" name="return" required=""><br>



                                        <label>Referal Investment Bonus Lines </label><br>

                                        <input style="padding:5px;" class="form-control" value="15" type="text" name="first_line" required=""><br>



                                        <input style="padding:5px;" class="form-control" value="7" type="text" name="second_line" required=""><br>



                                        <input style="padding:5px;" class="form-control" value="3" type="text" name="third_line" required=""><br>



                                        <input style="padding:5px;" class="form-control" value="3" type="text" name="fourth_line" required=""><br>



                                        <input style="padding:5px;" class="form-control" value="3" type="text" name="fifth_line" required=""><br>



                                        <label>Referal Profit Bonus Lines </label><br>

                                        <input style="padding:5px;" class="form-control" value="12" type="text" name="first_pline" required=""><br>



                                        <input style="padding:5px;" class="form-control" value="5" type="text" name="second_pline" required=""><br>



                                        <input style="padding:5px;" class="form-control" value="3" type="text" name="third_pline" required=""><br>



                                        <input style="padding:5px;" class="form-control" value="3" type="text" name="fourth_pline" required=""><br>



                                        <input style="padding:5px;" class="form-control" value="3" type="text" name="fifth_pline" required=""><br>



                                        <input type="hidden" name="id" value="6">

                                        <input type="hidden" name="_token" value="yekv97gfuweCsJHh0U9KNUMl97ys2aAvHniNz82G">

                                        <input type="submit" class="btn btn-default" value="Submit">

                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- /edit plans Modal -->


                </div>
            </div>

            <!-- Content / End -->
            
            <!-- Copyrights -->
            <?php include_once"inc/copyrights.php"; ?>
            
        </div>
        <!-- Dashboard / End -->
    </div>
    <!-- end Container Wrapper -->


    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    <!-- *Scripts* -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.html"></script>
    <script src="js/plugin.js"></script>
    <script src="js/preloader.html"></script>
    <script src="js/main.js"></script>
    <script src="js/dashboard-custom.js"></script>
    <script src="js/jpanelmenu.min.js"></script>
    <script src="js/counterup.min.js"></script>
</body>

</html>
