<?php

namespace Thelia\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'tax_rule_country' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.Thelia.Model.map
 */
class TaxRuleCountryTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'Thelia.Model.map.TaxRuleCountryTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('tax_rule_country');
        $this->setPhpName('TaxRuleCountry');
        $this->setClassname('Thelia\\Model\\TaxRuleCountry');
        $this->setPackage('Thelia.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('TAX_RULE_ID', 'TaxRuleId', 'INTEGER', false, null, null);
        $this->addColumn('COUNTRY_ID', 'CountryId', 'INTEGER', false, null, null);
        $this->addColumn('TAX_ID', 'TaxId', 'INTEGER', false, null, null);
        $this->addColumn('NONE', 'None', 'TINYINT', false, null, null);
        $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', true, null, null);
        $this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Country', 'Thelia\\Model\\Country', RelationMap::ONE_TO_ONE, array('country_id' => 'id', ), 'CASCADE', 'RESTRICT');
        $this->addRelation('Tax', 'Thelia\\Model\\Tax', RelationMap::ONE_TO_ONE, array('tax_id' => 'id', ), 'SET NULL', 'RESTRICT');
        $this->addRelation('TaxRule', 'Thelia\\Model\\TaxRule', RelationMap::ONE_TO_ONE, array('tax_rule_id' => 'id', ), 'CASCADE', 'RESTRICT');
    } // buildRelations()

} // TaxRuleCountryTableMap