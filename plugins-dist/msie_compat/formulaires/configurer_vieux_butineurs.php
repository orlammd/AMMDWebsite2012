<?php

/***************************************************************************\
 *  SPIP, Systeme de publication pour l'internet                           *
 *                                                                         *
 *  Copyright (c) 2001-2011                                                *
 *  Arnaud Martin, Antoine Pitrou, Philippe Riviere, Emmanuel Saint-James  *
 *                                                                         *
 *  Ce programme est un logiciel libre distribue sous licence GNU/GPL.     *
 *  Pour plus de details voir le fichier COPYING.txt ou l'aide en ligne.   *
\***************************************************************************/

if (!defined("_ECRIRE_INC_VERSION")) return;
include_spip('inc/presentation');

function formulaires_configurer_vieux_butineurs_charger_dist(){
	$valeurs = array(
		'iecompat' => $GLOBALS['meta']['iecompat']?$GLOBALS['meta']['iecompat']:'non',
		);
	return $valeurs;
}


function formulaires_configurer_vieux_butineurs_traiter_dist(){
	$res = array('editable'=>true);
	foreach(array(
		"iecompat",
		) as $m)
		if (!is_null($v=_request($m)))
			ecrire_meta($m, $v);

	$res['message_ok'] = _T('config_info_enregistree');
	return $res;
}

