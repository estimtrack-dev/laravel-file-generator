<?php


namespace Skyronic\FileGenerator\Estimtrack;


class GetListOfFilesToCreateService
{

    public function execute($businessName, $entityName){
        $basePath = $businessName.'/'.$entityName.'/';
        return [
            $basePath.'Domain/'.$entityName.'Entity',
            $basePath.'Repositories/'.$entityName.'Repository',

            $basePath.'Services/Get'.$entityName.'Service',
            $basePath.'Services/Create'.$entityName.'Service',
            $basePath.'Services/Update'.$entityName.'Service',
            $basePath.'Services/Delete'.$entityName.'Service.php',

            $basePath.'UseCases/Get'.$entityName.'/Get'.$entityName.'Request',
            $basePath.'UseCases/Get'.$entityName.'/Get'.$entityName.'UseCase',

            $basePath.'UseCases/Create'.$entityName.'/Create'.$entityName.'Request',
            $basePath.'UseCases/Create'.$entityName.'/Create'.$entityName.'UseCase',

            $basePath.'UseCases/Update'.$entityName.'/Update'.$entityName.'Request',
            $basePath.'UseCases/Update'.$entityName.'/Update'.$entityName.'UseCase',

            $basePath.'UseCases/Delete'.$entityName.'/Delete'.$entityName.'Request',
            $basePath.'UseCases/Delete'.$entityName.'/Delete'.$entityName.'UseCase',

        ];
    }

}
