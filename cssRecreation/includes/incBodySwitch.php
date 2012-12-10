<?php 
$contentVar = $_POST['contentVar'];
if ($contentVar == "NandT") {
	echo('
	<div id = "leftColumn">
		<div id = "leftColumnCell1">BROWSE BY</div>
		<div id = "leftColumnCell2" style = "color:#000000;">NAME/TITLE</div>
		<div id = "leftColumnCell3"> <a href="#" onClick="return false" onmousedown="javascript:swapContent(\'SandC\');">SECTION/CATEGORY</a> </div>
		<div id = "leftColumnCell3"> <a href="#" onClick="return false" onmousedown="javascript:swapContent(\'DEP\');">DEPARTMENT</a> </div>
		<div id = "leftColumnCell4"> <a href="#" onClick="return false" onmousedown="javascript:swapContent(\'NandT\');">HOME</a> </div>
	</div>
	<div id = "rightColumn">
		<div id = "rightColumnCellHead"> Name and Title <br> </div>
		<div id = "rightColumnCellBody"> Brief description of functionality here </div>
	</div>');
} else if ($contentVar == "SandC") {
	echo('
	<div id = "leftColumn">
		<div id = "leftColumnCell1">BROWSE BY</div>
		<div id = "leftColumnCell2"> <a href="#" onClick="return false" onmousedown="javascript:swapContent(\'NandT\');">NAME/TITLE</a> </div>
		<div id = "leftColumnCell3" style = "color:#000000;">SECTION/CATEGORY</div>
		<div id = "leftColumnCell3"> <a href="#" onClick="return false" onmousedown="javascript:swapContent(\'DEP\');">DEPARTMENT</a> </div>
		<div id = "leftColumnCell4"> <a href="#" onClick="return false" onmousedown="javascript:swapContent(\'NandT\');">HOME</a> </div>
	</div> 
	<div id = "rightColumn">
		<div id = "rightColumnCellHead"> Section and Category <br> </div>
		<div id = "rightColumnCellBody"> Brief description of functionality here </div>
    </div>');
} else if ($contentVar == "DEP") {
	echo('
	<div id = "leftColumn">
		<div id = "leftColumnCell1">BROWSE BY</div>
		<div id = "leftColumnCell2"> <a href="#" onClick="return false" onmousedown="javascript:swapContent(\'NandT\');">NAME/TITLE</a> </div>
		<div id = "leftColumnCell3"> <a href="#" onClick="return false" onmousedown="javascript:swapContent(\'SandC\');">SECTION/CATEGORY</a> </div>
		<div id = "leftColumnCell3" style = "color:#000000;">DEPARTMENT</div>
		<div id = "leftColumnCell4"> <a href="#" onClick="return false" onmousedown="javascript:swapContent(\'NandT\');">HOME</a> </div>
	</div>
	<div id = "rightColumn">
		<div id = "rightColumnCellHead"> Department <br> </div>
		<div id = "rightColumnCellBody"> Brief description of functionality here </div>
    </div>');
}
?>