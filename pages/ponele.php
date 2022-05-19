<?php 
          foreach ($zones as $zone_key => $zone_info) {
            if ($zone_info['main_nav']){
              if ($zone_key == $zone) {
                echo '<span class="w3-bar-item w3-button w3-hide-small w3-hide-medium ">' . $zone_info['title'] . 
                  '</span>';
              } else {
                echo '<a href="' . $zone_key . '" class="w3-bar-item w3-button w3-hide-small w3-hide-medium">' . $zone_info['title'] . 
                  '</a>';
              }
            }
          }
        ?>
