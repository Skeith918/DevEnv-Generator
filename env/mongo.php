<?php
MongoDB {
/* Constantes */
const int PROFILING_OFF = 0 ;
const int PROFILING_SLOW = 1 ;
const int PROFILING_ON = 2 ;
/* Champs */
public integer $w = 1 ;
public integer $wtimeout = 10000 ;
/* Méthodes */
public array authenticate ( string $username , string $password )
public array command ( array $command [, array $options = array() [, string &$hash ]] )
public __construct ( MongoClient $conn , string $name )
public MongoCollection createCollection ( string $name [, array $options ] )
public array createDBRef ( string $collection , mixed $document_or_id )
public array drop ( void )
public array dropCollection ( mixed $coll )
public array execute ( mixed $code [, array $args = array() ] )
public bool forceError ( void )
public MongoCollection __get ( string $name )
public array getCollectionInfo ([ array $options = array() ] )
public array getCollectionNames ([ array $options = array() ] )
public array getDBRef ( array $ref )
public MongoGridFS getGridFS ([ string $prefix = "fs" ] )
public int getProfilingLevel ( void )
public array getReadPreference ( void )
public bool getSlaveOkay ( void )
public array getWriteConcern ( void )
public array lastError ( void )
public array listCollections ([ array $options = array() ] )
public array prevError ( void )
public array repair ([ bool $preserve_cloned_files = FALSE [, bool $backup_original_files = FALSE ]] )
public array resetError ( void )
public MongoCollection selectCollection ( string $name )
public int setProfilingLevel ( int $level )
public bool setReadPreference ( string $read_preference [, array $tags ] )
public bool setSlaveOkay ([ bool $ok = true ] )
public bool setWriteConcern ( mixed $w [, int $wtimeout ] )
public string __toString ( void )
}
?>
