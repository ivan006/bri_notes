<?php

$data_items = array(
  "Find Partner" => array(
    "Bradley Hunter" => array(),
    "Marie Bennett" => array(),
    "Diana Wells" => array(),
    "Christopher Pierce" => array(),
    "ReportData"=>array(
      "Contact"=> array(
        "Telephone"=> "(000) 000-0000",
        "Email"=> "dreamshare@email.com",
      ),
      "1"=> "Share your holiday dream",
      "2"=> "And find the perfect partner to fulfill it",
      "3"=> "Find your holiday partner",
      "Meet a partner for your best holiday"=> array(
        "Bradley Hunter" => array(
          "Overview"=>  "Based in Chicago, I love playing tennis and loud music.",
          "Photo.jpeg"=> "assets\partner1.jpg",
        ),
        "Marie Bennett" => array(
          "Overview"=> "Currently living in Colorado. Lover of art, language and travelling.",
          "Photo.jpeg"=> "assets\partner2.jpg",
        ),
        "Diana Wells" => array(
          "Overview"=> "Living in Athens, Greece. I love black and white classics, chillout music and green tea.",
          "Photo.jpeg"=> "assets\partner3.jpg",
        ),
        "Christopher Pierce" => array(
          "Overview"=> "Star Wars fanatic. I have a persistent enthusiasm to create new things.",
          "Photo.jpeg"=> "assets\partner4.jpg",
        ),
      ),
      "Discover holiday activity ideas" => array(
        "1" => array(
          "Overview"=> "Sports",
          "Photo.jpeg"=> "assets\block1Sports.jpg",
        ),
        "2" => array(
          "Overview"=> "Wellness and Health",
          "Photo.jpeg"=> "assets\block2Wellness.jpg",
        ),
        "3" => array(
          "Overview"=> "Expeditions",
          "Photo.jpeg"=> "assets\block3Expeditions.jpg",
        ),
        "4" => array(
          "Overview"=> "Games",
          "Photo.jpeg"=> "assets\block4Games.jpg",
        ),
      ),
    ),

  ),
);


function reportdata($data_items, $LayerNumber){
  $LayerNumber = $LayerNumber+1;

  $data_items_field_type = array();
  $data_items_item_type = array();

  $result_part_2 = "";
  foreach ($data_items as $data_item_key => $data_item_value) {
    if (is_array($data_item_value)) {

      reset($data_item_value);
      $data_item_value_0 = key($data_item_value);
      $data_item_value_0_value = $data_item_value[$data_item_value_0];
      if (is_array($data_item_value_0_value)) {
        $ItemWidth = "Wi_100Per";
      } else {
        $ItemWidth = "Wi_50Per";
      }



      ob_start();
      ?>
      <div class=" <?php echo $ItemWidth ?>">
        <h<?php echo $LayerNumber ?>>
          <?php echo $data_item_key; ?>
        </h<?php echo $LayerNumber ?>>
        <div class="Di_Fl Fl_Wr">
          <?php echo reportdata($data_item_value,$LayerNumber) ?>

        </div>

      </div>

      <?php

      $result_part_2 = $result_part_2.ob_get_contents();

      ob_end_clean();
    }
  }


  $result_part_1 = "";
  foreach ($data_items as $data_item_key => $data_item_value) {
    if (!is_array($data_item_value)){

        if ($LayerNumber < 1) {
          $FieldWidth = "Wi_50Per";
        } else {
          $FieldWidth = "Wi_100Per";
        }
        ob_start();
        ?>
          <table  class="Pa_10px BoRa_10px Bo_1pxsolidgrey BoSi_CoBo  <?php echo $FieldWidth ?>">

            <tr>
              <td>
                <b>
                  <?php echo $data_item_key; ?>
                </b>
              </td>
              <td>
                <?php echo $data_item_value ?>
              </td>

            </tr>
          </table>

        <?php
        $result_part_1 = $result_part_1.ob_get_contents();

        ob_end_clean();

    }
  }




  ob_start();
  ?>
  <div class="Di_Fl Fl_Wr">
    <?php echo $result_part_1; ?>
  </div>
  <?php
  $result_part_1 = ob_get_contents();
  ob_end_clean();



  ob_start();
  ?>
  <div class="Di_Fl Fl_Wr">
    <?php echo $result_part_2; ?>
  </div>
  <?php
  $result_part_2 = ob_get_contents();
  ob_end_clean();

  $result = $result_part_1.$result_part_2;
  return $result;
}

if (!empty($data_items)) {
  reset($data_items);
  $data_items_0 = key($data_items);


  ob_start();
  ?>
  <h1>
    <?php echo $data_items_0; ?>
  </h1>
  <?php
  $title_html = ob_get_contents();
  ob_end_clean();

  $reportdata_html = "";
  $subreports_html = "";

  $data_items_0_items = $data_items[$data_items_0];
  foreach ($data_items_0_items as $data_items_0_items_key => $data_items_0_items_value) {
    if ($data_items_0_items_key == "ReportData") {
      $reportdata_html =  reportdata($data_items_0_items_value,0);
    } else {
      ob_start();
      ?>
      <table  class="Pa_10px BoRa_10px Bo_1pxsolidgrey Wi_25Per  ">
        <tr>
          <td>
            <b>
              <?php echo $data_items_0_items_key; ?>
            </b>
          </td>

        </tr>
      </table>

      <?php
      $subreports_html = $subreports_html.ob_get_contents();
      ob_end_clean();
    }
  }



  ob_start();
  ?>

  <div class="Di_Fl Fl_Wr">

    <?php echo $subreports_html; ?>
  </div>
  <hr>

  <?php
  $subreports_html = ob_get_contents();
  ob_end_clean();

  $page_html = $title_html.$subreports_html.$reportdata_html;


}




?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      .BgCo_Grey {background-color: rgb(200,200,200);}
      .BgCo_White {background-color: white;}
      .Wi_700 {width: 700px;}
      .MarLe_Auto {margin-left: auto;}
      .MarRi_Auto {margin-right: auto;}
      .Pa_10px {padding: 10px;}
      .BoRa_10px {border-radius: 5px;}
      .Bo_1pxsolidgrey {border:1px solid grey;}
      .Wi_25Per {width: 25%;}
      .Wi_50Per {width: 50%;}
      .Di_InBl {display:inline-block;}
      .Di_Fl {display: flex;}
      .Wi_100Per {width: 100%;}
      .BoSi_BoBo {box-sizing: border-box;}
      .Fl_Wr {flex-wrap: wrap;}
    </style>
  </head>
  <body class="BgCo_Grey">
    <div class="Wi_700 BgCo_White MarLe_Auto MarRi_Auto Pa_10px BoRa_10px">
      <div class="">

        <?php echo $page_html ?>
      </div>

    </div>

  </body>
</html>
