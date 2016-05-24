<?php

defined('_JEXEC') or die;

?>
<?php $document = JFactory::getDocument();
//check var dump $document
echo "<title>".$document->title."</title>";
echo $document->_custom[8];
echo $document->_custom[3];
echo $document->_custom[5];
echo $document->_custom[6];
echo $document->_custom[7];
echo $document->_custom[9];
?>