<?php
namespace jtl\Connector\Presta\Mapper;

class Currency extends BaseMapper
{
	protected $pull = array(
		'id' => 'id_currency',
		'factor' => 'conversion_rate',
		'nameHtml' => 'name',
		'name' => 'name',
		'iso' => 'iso_code',
		'isDefault' => null
	);

	protected function isDefault($data)
	{
		return $data['id_currency'] === '1' ? true : false;
	}
}
