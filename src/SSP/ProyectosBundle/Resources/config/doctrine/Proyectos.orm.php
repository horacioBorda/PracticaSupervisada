<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'proyectos',
  ));
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'id' => true,
   'fieldName' => 'id',
   'columnName' => 'id',
   'type' => 'integer',
   'unsigned' => false,
   'nullable' => false,
  ));
$metadata->mapField(array(
   'fieldName' => 'idconvenio',
   'columnName' => 'idConvenio',
   'type' => 'integer',
   'unsigned' => false,
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'nombre',
   'columnName' => 'nombre',
   'type' => 'string',
   'length' => 45,
   'fixed' => false,
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'descripcion',
   'columnName' => 'descripcion',
   'type' => 'string',
   'length' => 45,
   'fixed' => false,
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'estado',
   'columnName' => 'estado',
   'type' => 'string',
   'length' => 45,
   'fixed' => false,
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'fechafin',
   'columnName' => 'fechaFin',
   'type' => 'date',
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'fechain',
   'columnName' => 'fechaIn',
   'type' => 'date',
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'resultados',
   'columnName' => 'resultados',
   'type' => 'string',
   'length' => 45,
   'fixed' => false,
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'idresponsable',
   'columnName' => 'idResponsable',
   'type' => 'integer',
   'unsigned' => false,
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'idtipo',
   'columnName' => 'idTipo',
   'type' => 'integer',
   'unsigned' => false,
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'idresolucion',
   'columnName' => 'idResolucion',
   'type' => 'integer',
   'unsigned' => false,
   'nullable' => true,
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);