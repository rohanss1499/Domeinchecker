<?php

/**
* This class holds the settings for the TransIP API.
* 
* @package Transip
* @class ApiSettings
* @author TransIP (support@transip.nl)
*/
	class Transip_ApiSettings
{
 /**
  * The mode in which the API operates, can be either:
   *      readonly
    *      readwrite
     *
    * In readonly mode, no modifying functions can be called.
   * To make persistent changes, readwrite mode should be enabled.
  */
 public static $mode = 'readwrite';
 
/**
   * TransIP API endpoint to connect to.
    *
     * e.g.:
      *
     *      'api.transip.nl'
    *      'api.transip.be'
   *      'api.transip.eu'
  */
 public static $endpoint = 'api.transip.nl';
 
/**
   * Your login name on the TransIP website.
    *
     */
 public static $login = 'rohanss';
 
/**
   * One of your private keys; these can be requested via your Controlpanel
    */
 public static $privateKey = 'MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQChNNLk3UL3QbOd
J8PUNFNwhbmwXt44OyxVD5ISKDk7LjnWPpU+ifMsNT1R1yAG+Il/5o7Nc21QBRsa
uHfXzk/TO+zZQRDifr9XhW+oHHJxas9KteA/BqjKy0QX5uMAaTmsYz+y/mxJR6Kw
Ef9G/RzY/6MdhW3dvPlqSotWEkD+NuM0Mew04fmsAIwZDPNL3j6n685PSd+SoKr0
oMgP1uDRrSpP4y8j6nCDq749RULo/Z//4FOxcOVRYWY/t8ZSGbQnLCvmKWjdL0y2
FUnPHas7eqjHO7DqBBQkdLYWXaiPf1I4FbMzleNdzOj3BOHbf2gpb5C8HHhzKxml
+NRjQBPvAgMBAAECggEAOLAgsUZ1dAlwpgUDwi2cYedEgxb5QgDc+BR/o07twTfi
MsrTJKjSEGuwYoUpyAnCIG3tLaY3fHovK9hOnF76hyd9hHBzBZLYqmhL+Wv3epa6
ymTmtIMc/CM6kMUqckyOcWZ9Ue5SGfrM5OmPQWFksZJDw+/V0LHRa2VHVj8ZB8uq
fONhXFgy2vPAW+yhi+gAwdN76SZ5P4+a+2KN7mDNztwa6iTqffacSDCXKg9V+Y1A
0PKcjABO7UAR4vpVIGDENDNZCRX7rkDgZo+F/VyUcMe6VtPGb1eH4XfZxlpWUqiZ
VHhTRiOK8c0NSDBKKY9hFo2sKCnt052cTGOXYnj+oQKBgQDMt9FDkncEPlqz83j4
qeSJpLWKdQ3LhG0w++6Kk0DgHBSnmpQO5nI+p3wlsV8h85uVbN7oz785RZVcf94M
KeAg9znogOvkg6PU4cl8ixrvw1mxehQSK9yEYwPclxE1AFYWGHJ0+uO992teYzxk
aCbyUspPsimP0Z8PKMmLi0fH1wKBgQDJlq7sqgr+GibXMfEMsE9dxT9mIBniAF97
Lq/1oNtzBEPeU3hDgpKVzY7M7PT9vFFJOOybN8BCCL4HcxFsMRcnvOR0AA4qTc7u
oHdLpSgloGIR6Rc12LnMe/kW1acWQuduDeP8DkaP4/4nuPptvsaDadfa7xaWop6j
F/10oasxqQKBgCzvOAad8nPDAAO5sFbca6Zuuc5PTRzbz1/OHJjcI4RNhZcYTeFL
Yc4w0wYu/ZOlNgRBZlgxqWZ3yIYKJwICewihW1uWWLDK2D4U5TXqDpqMBXb4Ncmb
SQbh+OoFWqiIj1zANvdITo7W7QFFxO7BEbNkyrVdhNPljgU0zbBMfQ/3AoGAI1oW
gRBs7xTc/N4YPLZqpLIjpSA6CcUw+WQ9nWDBO1FjKYkPzR8H39d1lIB1kk3FH4cp
DytevvXThXDrfEK7oc9hbOpZkZelk3l2kkB7YuXWbPeoh1vjcXXIP/Xl4GSJO2aa
Nai3PSKpfoPU/wv2ujMElLNbDb2k/ksFur9jS0kCgYEAvuf9eNLc5q/9jVwIWUOg
ek/26WcqwUU2KS2KEftm2bE3mSFFr2XPnXyRAmKgBi9/ZwDKJ1e8jsut5RjzhqJN
AEdFvX05+0qb6maHejWPmaCXavXKXQf3+O+2hm6Bb+jTHocOmFbT8rf2YBq65EZs
FOtd3GGvsr+7NaXw2ko5qPM=';