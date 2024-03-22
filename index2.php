<?php
/**
 * Home Page
 *
 * PHP version 7
 *
 * @category  Page
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */

?>
<?php  require_once 'header.php'; ?>
<?php
require_once 'inc/manager-db.php';

if(isset($_GET['continent'])){
  $continent = $_GET['continent'];
} else {
  $continent = 'Asia';
}

$desPays = getCountriesByContinent($continent);
?>

<main role="main" class="flex-shrink-0">

  <div class="container">
    <h1>Les pays en <?php echo $continent;?> </h1>
    <h1>Le nombre de Pays : <?php echo GetNombrePays();?> </h1>
    <h1>Le nombre de Villes : <?php echo GetNombreVille();?> </h1>
    <div>
     <table class="table">
         <tr>
          <th>Drapeau</th>
          <th>Nom</th>
          <th>Population</th>
          <th>Continent</th>
          <th>Capital</th>
          <th>Chef d'état</th>
         </tr>

       <?php foreach ($desPays as $lePays){?>
          <tr>
            <td><img src="images/drapeau/<?php echo strtolower($lePays->Code2)?>.png"></td>
            <td><a href="formulaire.php"><?php echo $lePays->Name;?></a></td>
            <td> <?php echo $lePays->Name ?></td>
            <td> <?php echo $lePays->Population ?></td>
            <td> <?php echo $lePays->Continent?></td> 
            <td> <?php echo getCapital($lePays->Capital)?></td> 
            <td> <?php echo $lePays->HeadOfState?></td>    
          </tr> 
          <?php }?>
     </table>
    </div>
    <p>
        <code>
      
        
        </code>
    </p>
</main>

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>
