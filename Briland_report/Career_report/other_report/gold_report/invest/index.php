<?php

function query($arg){
  $c = terms();

  $years=$arg[0];
  $months = $years*12;

  $IncPerYear=$arg[2];
  $percentGain=$IncPerYear/12;

  $initialInvestment=$arg[1];

  $r = 0;

  $rate1 = 303.24;

  $coins1 = $arg[1];
  $currentInvetmentMoney = $arg[1]*$rate1;
  $increase = 0;

  // $cummulativePercIncrease = 0;

  $lockeddivs1 = 0;

  // $r is $row

  // $x is $result

  // $t is $terms

  while ($r < $months) {

    $x[$r][$c[0]] = $year = round($r/12,2);


    $chour = 60*60;
    $cday = 24*$chour;
    $cyear = 365.25*$cday;
    // $seconds = $year*pow(10,9)+pow(10,12);
    $seconds = ($cyear*49.8)+($cday*15)+($cyear*$x[$r][$c[0]]);
    // echo date("d-m-Y", $seconds);
    $x[$r][$c[12]] = $date = date("m-Y", $seconds);
    $x[$r][$c[14]] = ceil($year);

    // $x[$r][$c[1]] = $coins1-$x[$r][$c[5]];
    $x[$r][$c[1]] = $coins1;
    $x[$r][$c[8]] = $rate1;
    $x[$r][$c[2]] = $value1 = $coins1*$rate1;
    $x[$r][$c[9]] = $rate2 = $rate1+($rate1*$percentGain);
    $x[$r][$c[4]] = $value2 = $coins1*$rate2;
    $x[$r][$c[3]] = $valuegain = $value2-$value1;
    // echo $x[$r][$c[9]]."<br>";
    $x[$r][$c[10]] = $lockeddivs1 = $valuegain+$lockeddivs1;
    $x[$r][$c[5]] = $unlockeddivs = floor($lockeddivs1/$rate2);
    $x[$r][$c[13]] = $unlockeddivsvalue = $unlockeddivs*$rate2;
    $x[$r][$c[11]] = $lockeddivs2 = $lockeddivs1-($unlockeddivs*$rate2);
    $x[$r][$c[6]] = $coins2 = $coins1-$unlockeddivs;
    $x[$r][$c[7]] = $value2 = $coins2*$rate2;


    // $increase = $currentInvetmentMoney*$percentGain;
    // $increase = ($currentInvetmentMoney+($currentInvetmentMoney*$cummulativePercIncrease))-$initialInvestment;

    // $currentInvetmentMoney = $x[$r][$c[1]];
    $coins1 = $coins2;
    $rate1 = $rate2;
    $lockeddivs1 = $lockeddivs2;
    $r++;

  }
  $result = array($x,$arg);
  return $result;
}


function terms(){
  $r = array(
    0 => "time",
    12 => "date",
    14 => "month number",
    1 => "coins at start",
    8 => "predicted exchange rate at start",
    2 => "value at start",
    9 => "predicted exchange rate at end",
    4 => "value after appreciation",
    3 => "appreciation value",
    10 => "locked dividents value at start",
    5 => "unlcoked dividents coins",
    13 => "unlcoked dividents value",
    11 => "locked dividents value at end",
    6 => "coins at end",
    7 => "value at end",
  );
  return $r;
}


function style($args){
  ob_start();
  ?>



  <style media="screen">
  .bor-1 {border: solid 1px black;}
  .pad-3 {padding: 3px;}
  </style>
  <b>assuming that:</b><br>
  <b>gold appreciation is</b> <?php echo $args[1][2]  ?> per year<br>
  <b>investment is for</b> <?php echo $args[1][1]  ?> gold coins<br>
  <b>investment is in </b>  <?php echo $args[1][3]  ?> ounce gold coins<br>
  <b>viewer want to see</b>  <?php echo $args[1][0]  ?> year breakdown<br>
  <table>
    <tr>
      <?php $c = terms(); ?>
      <th class="bor-1 pad-3"><?php echo $c[12] ?></th>
      <th class="bor-1 pad-3">investment</th>
      <th class="bor-1 pad-3">income for month</th>
      <!-- <th class="bor-1 pad-3"><?php //echo $c[3] ?></th> -->
    </tr>
    <?php foreach ($args[0] as $key => $value): ?>
      <tr>
        <td class="bor-1 pad-3">
          <b><?php echo $value[$c[12]] ?></b><br>
          <?php echo $value[$c[14]] ?>
        </td>

        <td class="bor-1 pad-3">
          <b><?php echo round($value[$c[6]]) ?> coins</b>
          <br>
          <?php echo round($value[$c[7]]) ?> pounds
        </td>
        <td class="bor-1 pad-3">
          <b><?php echo round($value[$c[5]]) ?> coins</b>
          <br>
          <?php echo round($value[$c[13]]) ?> pounds
        </td>
        <!-- <td class="bor-1 pad-3">
        <?php //echo $value[$c[3]] ?>
      </td> -->
    </tr>
  <?php endforeach; ?>
</table>
<?php
$r = ob_get_contents();
ob_flush();

};


$query = query(array(1,156,0.07,0.25));
$r = style($query);
echo $r;
?>
