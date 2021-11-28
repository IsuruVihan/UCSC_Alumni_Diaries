<?php

include('../../../db/db-conn.php');

$query = "SELECT Title, Content,PicSrc,OwnerEmail,Timestamp,Id FROM posts ORDER by Timestamp DESC";
$results = mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($results);
if(isset($row['Id'])){

    echo "
            <div class='edit-notice-box' id='edit-notice-box'>
			<div class='box-title'>
			Edit Important Notice
			</div>
			<div id='create-notice'>
				<div class='row-1'>
					<input class='input-field-title' type='text' placeholder=".$row['Title']."/>
					<p class='field-header'> date</p>
				</div>
				<div class='row-2'>
					<label for='myFile' class='filter-btn btn upload-btn'>
					<input type='file' id='myFile' name='filename' hidden>
					Edit Upload</label>
				</div>
				<div class='row-3'>
				    <textarea class='create-notice-text' placeholder=".$row['Content']."/></textarea>
				</div>
				<div class='row-4'>
					<button class='filter-btn btn'>Edit Notice</button>
					<button class='filter-btn btn' onclick='HideEditNotice ()' >Cancel</button>
				</div>
			</div>
		</div>";
}

?>