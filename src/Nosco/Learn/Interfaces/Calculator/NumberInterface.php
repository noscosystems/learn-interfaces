<?php

    namespace Nosco\Learn\Interfaces\Calculator;

    interface NumberInterface
    {

        /**
         * Constructor
         *
         * @access public
         * @param numeric $value
         * @return void
         */
        public function __construct($value);

        /**
         * Get: Value
         *
         * @access public
         * @return numeric
         */
        public function getValue();

        /**
         * Is Equal
         *
         * Is the number that the object represents equal to the value passed?
         *
         * @access public
         * @param numeric $value
         * @return boolean
         */
        public function isEqual($value);

        /**
         * Is Identical?
         *
         * Is the number that the object represents identical to the value passed?
         *
         * @access public
         * @param numeric $value
         * @return boolean
         */
        public function isIdentical($value);

    }
