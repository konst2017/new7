<?php
use yii\helpers\Html;


?>

		 <h1>Данные мастера</h1>
	  <?php // foreach($name as $names): ?>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;"><?= "Имя" ?></td>
                <td style="padding: 8px; border: 1px solid #ddd;"><?= $name1 ?></td>
            </tr>
		<?php  //$i++; endforeach; ?>	
	

     
		 <h1>Данные заказчика</h1>
	  <?php // foreach($name as $names): ?>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;"><?= "Имя" ?></td>
                <td style="padding: 8px; border: 1px solid #ddd;"><?= $name2 ?></td>
            </tr>
			
			<tr>
                <td style="padding: 8px; border: 1px solid #ddd;"><?= "Фамилия" ?></td>
                <td style="padding: 8px; border: 1px solid #ddd;"><?= $name3 ?></td>
            </tr>
			<tr>
                <td style="padding: 8px; border: 1px solid #ddd;"><?= "Отчество" ?></td>
                <td style="padding: 8px; border: 1px solid #ddd;"><?= $name4 ?></td>
            </tr>
			<tr>
                <td style="padding: 8px; border: 1px solid #ddd;"><?= "Дополнительная информация(+контактные данные)" ?></td>
                <td style="padding: 8px; border: 1px solid #ddd;"><?= $comment ?></td>
            </tr>
		<?php  //$i++; endforeach; ?>	
	
      
		  </tbody>
		
		
	
		
		
		
    </table>
</div>