<?php
// Composer autoloader - used for autoloading doctrine components
require_once '/home/admin1/sandy/PHP/ANNOTATION/vendor/autoload.php';
// Contains blueprints of the different annotations types as classes//
require_once '/home/admin1/sandy/PHP/ANNOTATION/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation.php';
//The example class to demonstrate annotations
/** *
 * @Annotation
 *
 */
class AnnotatedDescription
{
    public $value;public $type;public $desc;
}
/**
 *
 * @AnnotatedDescription("The class demonstrates the use of annotations")
 *
 * */class AnnotationDemo
{
    /**
     * @AnnotatedDescription("The property is made private for a subtle reason")
     */
    private $property = "I am a private property!";
    /**
     * @AnnotatedDescription(desc ="The method is made public for a subtle reason", type="getter")
     */
    public function getProperty()
    {
        return $this->getProperty();
    }
}
// Lets parse the annotations
use Doctrine\Common\Annotations\AnnotationReader;
$annotationReader = new AnnotationReader();
//Get class annotation
$reflectionClass = new ReflectionClass('AnnotationDemo');
$classAnnotations = $annotationReader->getClassAnnotations($reflectionClass);
echo "========= CLASS ANNOTATIONS =========\n";
var_dump($classAnnotations);
// You can also pass ReflectionObject to the same method to read annotations in runtime
$annotationDemoObject = new AnnotationDemo();
$reflectionObject = new ReflectionObject($annotationDemoObject);
$objectAnnotations = $annotationReader->getClassAnnotations($reflectionObject);
echo "========= OBJECT ANNOTATIONS =========\n";
var_dump($objectAnnotations);
//Property Annotations
$reflectionProperty = new ReflectionProperty('AnnotationDemo', 'property');
$propertyAnnotations = $annotationReader->getPropertyAnnotations($reflectionProperty);
echo "========= PROPERTY ANNOTATIONS =========\n";
var_dump($propertyAnnotations);
// Method Annotations
$reflectionMethod = new ReflectionMethod('AnnotationDemo', 'getProperty');
$methodAnnotations = $annotationReader->getMethodAnnotations($reflectionMethod);
echo "========= Method ANNOTATIONS =========\n";
var_dump($propertyAnnotations);
