<?php
$grades=[
  '國文'=>[ 
        'judy'=>95,
         'amo'=>88,            
         'john'=>45,               
         'peter'=>59,
         'hebe'=>71            
        
      ],  
  '英文'=>[
        'judy'=>64,
         'amo'=>78,           
         'john'=>60,               
         'peter'=>32,
         'hebe'=>62            
        
    ],
  '數學'=>[
        'judy'=>70,
         'amo'=>54,           
         'john'=>68,               
         'peter'=>77,
         'hebe'=>80            
        
    ],
  '地理'=>[
        'judy'=>90,
         'amo'=>81,           
         'john'=>70,               
         'peter'=>54,
         'hebe'=>62            
        
    ],
  '歷史'=>[
        'judy'=>84,
         'amo'=>71,           
         'john'=>62,               
         'peter'=>42,
         'hebe'=>64            
        
    ]
];
echo "<table>";
echo "<tr>";
echo "<td>&nbsp;</td>"; 
foreach ($grades as $key => $value) {
  echo "<td>$key</td>";
}echo "</tr>";
foreach ($grades as $key => $value) {
  for($i=0;$i<count($value);$i++){
    echo "<td>".$value[$i]."</td>";
  }
  foreach($value as $name=>$score){
    echo "<tr><td>".key($value)."</td>";
  }
  
  sort($value);
  for($i=0;$i<count($value);$i++){
    echo "<td>".$value[$i]."</td>";
  }
  echo "</tr>";
}
echo "</table>";