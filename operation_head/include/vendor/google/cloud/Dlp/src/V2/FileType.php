<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/storage.proto

namespace Google\Cloud\Dlp\V2;

use UnexpectedValueException;

/**
 * Definitions of file type groups to scan.
 *
 * Protobuf type <code>google.privacy.dlp.v2.FileType</code>
 */
class FileType
{
    /**
     * Includes all files.
     *
     * Generated from protobuf enum <code>FILE_TYPE_UNSPECIFIED = 0;</code>
     */
    const FILE_TYPE_UNSPECIFIED = 0;
    /**
     * Includes all file extensions not covered by text file types.
     *
     * Generated from protobuf enum <code>BINARY_FILE = 1;</code>
     */
    const BINARY_FILE = 1;
    /**
     * Included file extensions:
     *   asc, brf, c, cc, cpp, csv, cxx, c++, cs, css, dart, eml, go, h, hh, hpp,
     *   hxx, h++, hs, html, htm, shtml, shtm, xhtml, lhs, ini, java, js, json,
     *   ocaml, md, mkd, markdown, m, ml, mli, pl, pm, php, phtml, pht, py, pyw,
     *   rb, rbw, rs, rc, scala, sh, sql, tex, txt, text, tsv, vcard, vcs, wml,
     *   xml, xsl, xsd, yml, yaml.
     *
     * Generated from protobuf enum <code>TEXT_FILE = 2;</code>
     */
    const TEXT_FILE = 2;
    /**
     * Included file extensions:
     *   bmp, gif, jpg, jpeg, jpe, png.
     * bytes_limit_per_file has no effect on image files.
     *
     * Generated from protobuf enum <code>IMAGE = 3;</code>
     */
    const IMAGE = 3;
    /**
     * Included file extensions:
     *   avro
     *
     * Generated from protobuf enum <code>AVRO = 7;</code>
     */
    const AVRO = 7;

    private static $valueToName = [
        self::FILE_TYPE_UNSPECIFIED => 'FILE_TYPE_UNSPECIFIED',
        self::BINARY_FILE => 'BINARY_FILE',
        self::TEXT_FILE => 'TEXT_FILE',
        self::IMAGE => 'IMAGE',
        self::AVRO => 'AVRO',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

