
    <?php foreach($users as $value ){?>
      <tr>
        <td><?=$value->first_name?></td>
        <td><?=$value->last_name?></td>
        <td><?=$value->email?></td>
      </tr>
    <?php }?>
