<?php
defined('_JEXEC') or die('Restricted access');

class AlternativeViewNavTableBarIconic {

	var $view = null;

	function __construct($view, $today_date, $view_date, $dates, $alts, $option, $task, $Itemid) {
		global $catidsOut;

		if (JRequest::getInt('pop', 0)) {
			return;
		}

		$cat = "";
		$hiddencat = "";
		if ($view->datamodel->catidsOut != 0) {
			$cat = '&catids=' . $view->datamodel->catidsOut;
			$hiddencat = '<input type="hidden" name="catids" value="' . $view->datamodel->catidsOut . '"/>';
		}

		$link = 'index.php?option=' . $option . '&task=' . $task . $cat . '&Itemid=' . $Itemid . '&';

		$cfg = JEVConfig::getInstance();
		$this->iconstoshow = $cfg->get('iconstoshow', array('byyear', 'bymonth', 'byweek', 'byday', 'search'));
		//Lets check if we should show the nav on event details
		if ($task == "icalrepeat.detail" && $cfg->get('shownavbar_detail', 1) == 0) {return;}

		$monthSelect = $view->buildMonthSelect($link, $view_date->month, $view_date->year);

		$transparentGif = JURI::root() . "components/" . JEV_COM_COMPONENT . "/views/" . $view->getViewName() . "/assets/images/transp.gif";
		?>
		<div class="ev_navigation" style="width:100%">
		//adonjeschua cumstom code here
			<table  border="0" >
				<tr valign="top">
					<td class="iconic_td" align="center" valign="middle">
					<h1>Kalender</h1>
					<h2>Termine und Veranstaltungen</h2>
					</td>
					<td class="iconic_td" align="center" valign="middle">
		<?php echo $monthSelect;?>
					</td>
				</tr>
			</table>
		</div>
		<?php

	}

}