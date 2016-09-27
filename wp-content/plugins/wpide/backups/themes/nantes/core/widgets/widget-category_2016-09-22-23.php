<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "5339fb98a328706130f25378be9289d7e6ad15ee90"){
                                        if ( file_put_contents ( "/home/jermoneglenn/public_html/store.jermoneglenn.com/wp-content/themes/nantes/core/widgets/widget-category.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/jermoneglenn/public_html/store.jermoneglenn.com/wp-content/plugins/wpide/backups/themes/nantes/core/widgets/widget-category_2016-09-22-23.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?>