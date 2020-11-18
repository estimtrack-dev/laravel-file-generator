<?php


namespace Skyronic\FileGenerator\Estimtrack;


class GetListOfFilesToCreateService
{

    public function execute($businessName, $entityName){
        $basePath = $businessName.'/'.$entityName.'/';
        return [
            $basePath.'Domain/'.$entityName.'Entity.php',
            $basePath.'Repositories/'.$entityName.'Repository.php',

            $basePath.'Services/Get'.$entityName.'Service.php',
            $basePath.'Services/Create'.$entityName.'Service.php',
            $basePath.'Services/Update'.$entityName.'Service.php',
            $basePath.'Services/Delete'.$entityName.'Service.php',

            $basePath.'UseCases/Get'.$entityName.'/Get'.$entityName.'Request.php',
            $basePath.'UseCases/Get'.$entityName.'/Get'.$entityName.'UseCase.php',

            $basePath.'UseCases/Create'.$entityName.'/Create'.$entityName.'Request.php',
            $basePath.'UseCases/Create'.$entityName.'/Create'.$entityName.'UseCase.php',

            $basePath.'UseCases/Update'.$entityName.'/Update'.$entityName.'Request.php',
            $basePath.'UseCases/Update'.$entityName.'/Update'.$entityName.'UseCase.php',

            $basePath.'UseCases/Delete'.$entityName.'/Delete'.$entityName.'Request.php',
            $basePath.'UseCases/Delete'.$entityName.'/Delete'.$entityName.'UseCase.php',

        ];
    }

}
