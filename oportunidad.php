<?php

require_once 'modelo/persona.php';
require_once 'modelo/datosoperacion.php';
require_once 'modelo/oportunidad.php';
require_once 'modelo/respuestaoportunidad.php';

header('Content-Type: application/json');

$p = new persona();
$p->nombres='pedro rodrigez';
$p->sexo='f';
$p->documento=123123;
$p->email='aaaa@aaaa.com.ar';
$p->celular=123456;
$p->telefonoalternativo=123456;

$d=new datosoperacion();
$d->mostosolicitado=500000;
$d->linea=504;
$d->cantidadcuotas=12;
$d->tasaefectivamensual=2.9589;
$d->cuotapromedio=53503.08;
$d->tasanominalanual=36;
$d->costofinancierototal=56.55;

$op=new oportunidad();
$op->persona=$p;
$op->datosoperacion=$d;
$op->smsconsultaid="17654293-27258197726";
$op->idvalidatorid=893;
$op->motorsolafirmaid=8870;

$res=new respuestaoportunidad();
$res->oportunidad=$op;
$res->isok='true';

echo json_encode($res);

