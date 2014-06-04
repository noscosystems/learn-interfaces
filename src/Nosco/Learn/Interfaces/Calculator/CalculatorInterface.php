<?php

    namespace Nosco\Learn\Interfaces\Calculator;

    use \Nosco\Learn\Interfaces\Calculator\NumberInterface as INum;

    interface CalculatorInterface
    {

        /**
         * Create Number
         *
         * Create a number object from the value provided.
         *
         * @access public
         * @param numeric $value
         * @return NumberInterface
         */
        public function createNumber($value);

        /**
         * Add Two Numbers
         *
         * @access public
         * @param NumberInterface $first
         * @param NumberInterface $second
         * @return NumberInterface
         */
        public function add(INum $first, INum $second);

        /**
         * Subtract Two Numbers
         *
         * @access public
         * @param NumberInterface $first
         * @param NumberInterface $second
         * @return NumberInterface
         */
        public function subtract(INum $first, INum $second);

        /**
         * Multiply Two Numbers
         *
         * @access public
         * @param NumberInterface $first
         * @param NumberInterface $second
         * @return NumberInterface
         */
        public function multiply(INum $first, INum $second);

        /**
         * Divide Two Numbers
         *
         * @access public
         * @param NumberInterface $first
         * @param NumberInterface $second
         * @return NumberInterface
         */
        public function divide(INum $first, INum $second);



    }
