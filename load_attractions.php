<?php
    $strQry="SELECT id, name, image, web, category, ST_AsGeoJSON(geom, 5) as geom FROM pretoria_attractions ORDER BY name";
    
    if (isset($_POST['filter'])) {
        if ($_POST['filter']!=='All') {
            $strQry="SELECT id, name, image, web, category, ST_AsGeoJSON(geom, 5) as geom FROM pretoria_attractions WHERE category='{$_POST['filter']}' ORDER BY name";
        }
    }

    
    $db = new PDO('pgsql:host=localhost;port=5432;dbname=pretoria;', 'postgres', '1234');
    $sql = $db->query($strQry);
    $features=[];
    while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
        $feature=['type'=>'Feature'];
        $feature['geometry']=json_decode($row['geom']);
        unset($row['geom']);
        $feature['properties']=$row;
        array_push($features, $feature);
    }
    $featureCollection=['type'=>'FeatureCollection', 'features'=>$features];
    echo json_encode($featureCollection);
?>