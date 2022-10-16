<?php
//Nama : Muhammad Wahfiudin Ardiansyah
//NIM : 12201765
$data=file_get_contents("https://ojk-invest-api.vercel.app/api/illegals");
$data_ojk=json_decode($data, TRUE);
//echo "<pre>";print_r($ojk);
$table = "<h3>Perusahaan Illegal di OJK</h3>";
$table .= "<table border=1>
            <tr><td>No</td>
			    <td>Nama Perusahaan</td>
				<td>Alamat</td>
				<td>Telephone</td>
				<td>Tipe</td>
				<td>Web</td></tr>";
for($i=0;$i<count($data_ojk["data"]["illegals"]);$i++){

    if (empty($data_data_ojk["data"]["illegals"][$i]["number"]))
    {
        $number = null;
    } 
    else for($j=0;$j<count($data_ojk["data"]["illegals"][$i]["number"]);$j++)
    {
        $number = $data_ojk["data"]["illegals"][$i]["number"][$j];
    }

    if (empty($data_ojk["data"]["illegals"][$i]["urls"]))
    {
        $urls = null;
    } 
    else for($k=0;$k<count($data_ojk["data"]["illegals"][$i]["urls"]);$k++)
    {
        $urls = $data_ojk["data"]["illegals"][$i]["urls"][$k];
    }

	$no=$i+1;
	$table .= "<tr>
                <td>{$no}</td>
			    <td>{$data_ojk["data"]["illegals"][$i]["name"]}</td>
				<td>{$data_ojk["data"]["illegals"][$i]["address"]}</td>
				<td>{$number}</td>
				<td>{$data_ojk["data"]["illegals"][$i]["type"]}</td>
				<td>{$urls}</td>
				</tr>";
}
$table .= "</table>";
echo $table;				
?>