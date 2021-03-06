<?php

/**
 * Class Flagbit_Sniffs_Magento_Template_NoFunctionNoClassDeclarationSniff
 */
class Flagbit_Sniffs_Magento_Template_NoFunctionNoClassDeclarationSniff implements PHP_CodeSniffer_Sniff
{


    public function register()
    {
        return array(T_FUNCTION, T_CLASS);
    }


    public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();

        if ($tokens[$stackPtr]['code'] === T_FUNCTION) {
            $phpcsFile->addError(
                'Function declarations in templates are disallowed',
                $stackPtr
            );
        } else {
            $phpcsFile->addError(
                'Class declarations in templates are disallowed',
                $stackPtr
            );
        }
    }


}
