<?php
    $league_Id = 168;
    require __DIR__ . '/../connections/api.php';
?>

<div class="container card mt-14">
  <div class="card-body">
    <h5 class="card-title fs-1 pb-3">France League</h5>
    <div class="bg-white">
        <table class="table table-bordered">
            <thead class="table table-primary">
                <tr class="text-center">
                    <th scope="col">Position</th>
                    <th scope="col">Club</th>
                    <th scope="col">Play</th>
                    <th scope="col">Win</th>
                    <th scope="col">Draw</th>
                    <th scope="col">Lose</th>
                    <th scope="col">Point</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $country): ?>
                    <tr>
                        <td class="text-center"><?php echo $country['overall_league_position']; ?></td>
                        <td>
                            <img src="<?php echo $country['team_badge']; ?>" alt="Logo team" width="50px">
                            <?php echo $country['team_name']; ?>
                        
                        </td>
                        <td class="text-center"><?php echo $country['overall_league_payed']; ?></td>
                        <td class="text-center"><?php echo $country['overall_league_W']; ?></td>
                        <td class="text-center"><?php echo $country['overall_league_D']; ?></td>
                        <td class="text-center"><?php echo $country['overall_league_L']; ?></td>
                        <td class="text-center"><?php echo $country['overall_league_PTS']; ?></td>
                    </tr>
                <?php endforeach; ?>            
            </tbody>
        </table>
    </div>
    </div>
</div>