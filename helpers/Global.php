<?php

function formato_monto($monto)
{

	if (!is_numeric($monto)) {
		return;
	}

	return sprintf('%01.2f', abs($monto));
}
