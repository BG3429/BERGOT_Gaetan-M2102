<?php
//Déclaration d'une fonction
function titre($titre,$niveau=1){
  echo "<h{$niveau}>{$titre}</h{$niveau}>";   
}
//
function paragraphe($texte,$element="div"){
  echo "<{$element}>{$texte}</{$element}>";
}
//
function paragrapheAvecTitre($titre,$texte="",$niveau=1,$element="div"){
  titre($titre,$niveau);
  paragraphe($texte,$element);
}
//Appel fonction
titre("Titre (niveau1)");

paragraphe("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id libero nec risus eleifend pretium eu ut ex. Nullam laoreet vel ex eu ornare. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce interdum id sem rhoncus fermentum. Vestibulum egestas lacus eu efficitur hendrerit. Curabitur ac quam mi. In semper, nibh sit amet iaculis ultrices, tortor velit porttitor turpis, sit amet bibendum nibh ex ullamcorper dolor. Mauris ultrices ut lorem ut malesuada. Quisque eget sapien sit amet justo ultrices cursus ut vitae mauris.");
paragrapheAvecTitre("Titre 2","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tincidunt nulla aliquet rhoncus tincidunt. Nullam vel malesuada magna, eu aliquam orci. Aliquam tempus eu lectus quis efficitur. Nam viverra ligula nunc. Suspendisse potenti. Morbi vulputate consequat blandit. Nullam consequat metus vitae arcu condimentum, ac tincidunt odio tempus. Suspendisse elementum bibendum lobortis. Vestibulum vitae turpis metus. Mauris dapibus ultricies nunc, nec scelerisque lectus. Nunc egestas lacus ac ligula sagittis, egestas volutpat velit varius.");

titre("Sous titre (niveau2)",2);
titre("Encore un sous titre (niveau3)",3);


?>
