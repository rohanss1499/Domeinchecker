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
	 *		readonly
	 *		readwrite
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
	 * 		'api.transip.nl'
	 * 		'api.transip.be'
	 * 		'api.transip.eu'
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
	public static $privateKey = '-----BEGIN PRIVATE KEY-----
MIIEvwIBADANBgkqhkiG9w0BAQEFAASCBKkwggSlAgEAAoIBAQDkzQjByBtOL4Ky
J9o7kpw4dQjA67ooKbwf9U5cuKCuNwH+O3C7tAXfKJ513aLZ3OJ8uncUOv48OeRJ
4zZg0p13O56KDGUu4lIjLF00m/VcPA2ydxublZtoa5VSykjYNGl/evUDsC1+Tfcv
XelD3nTqQ7K3/ITKaixQy1aEcCzXTkK8OYaJcaX3cR5mvtOpL7OtYh0nMvFkwHOk
gFW3iybVDrkW3KrfdC3qQBbh4VN5fkg8aEZ4RB33XGBYadAyInZp5agw0SESs7U0
Rstn71chzR5/1ZZBnRsL3d/s5BED4Qpo+XYSbpr/xUAVHtUz2/O6blaL6CiRCuc6
O5oXuukPAgMBAAECggEBAOLglWBiZwEeh4DVl8ce2B37n1R96zhMOimOe8fhpCNc
lHNeyai3GGNyyb6iqgtSxptb4xyCavuZhE/oKFHWRyKmUc0eAW9+KGiMY1f5llGB
kyt2hD/BGDtxAr73q0gIoNwyNqcTmej2srebbeVIv7JUsvFSSvLUWWE8YGwvN6e+
KJi9dHJm0v1RvXhZIyWqQzz5XLYpUpq6ZTO+qQFjV6MnxYSsWrfc9WmbMhYqEImE
IMkTluDEFAyc/E++d6kn1cJBZOaTyHpJNFOZ5ms9LU+LD0RwEy+rNVJPjCbycLbn
KC8SIKFm500Un/J0Z6f/EA3j2pSpVf7pRfI41/vZazECgYEA+nc4W5cc2pWST6Ec
ouNhxOM+HjCqL+nk9o6zS7PuEeaFnXrz6yqhuYiLZaW3m0utRFPO0FFkrY/Flvhp
HwSdP/cwV9UsqZ8SHmINu4bGY6wsHHUY3qsslj4ghFdV8gHhpeVyQdWK1kvWRQPo
ufaeL7eeRP5C/ZXvS3yMjY6qYEsCgYEA6dtD8Th0LWpYSPgT9bQYegoSwDo6J9i8
LeODInwjrRLn1nTlDmGiDR1HEgbA0hvx9GAFqKcDya60il/rvMDEEJE7vgNB5J4Z
JREFwaHpeIbLhI+m7yoZXI/DVfb820EXEkyrB4FBHIqqZK8K2C7F9pJ81kPAfwlz
JvdODfFlR80CgYEAj8gc7EdFYx32DgxZGhEaMSKaqE4bhMHqlLe6qbyy8Ee7cHoC
yH+Cs7V1AHcvfdDluJG76c6v0wrzzQTxo8LMWsoWUHWp2/3bMuHrLDnkbZeLAxMd
ocX2JJGprQ9N4U2/MbMT8kMaHocOjDQAR7ERgicQjl7AKj8GTflD3oeFux0CgYBt
LugryVXElnAdsWVwQ+Nhpy5V/VmFnRVOv3hMM3VcqwT/BZij/EVypga2jdycvFtc
4zABK+kC0sSMDni7qaxgp84iytaK7J2ExsvPOc8NbLG8dG1WIGuy4ZQroKMxotQo
wQ7g9CH4N22SkH8Zq8zVcFNEnmFTbpAK00/oBppoyQKBgQCbr9bBWCFpJ2yUTDHw
E2tb8MZjepAYJmd8NGUq/zr5V5im3PaB8dIt9MaKnJuV+E8uETejg8QTb0o4WYgv
IOYa8gRPSH62WQgaSabIBCxSLhCzMRrKntHf+MJl43YwdR/Jp3OT1EpVzR65A3rM
iolUf4ikU9vtatroe2lwMVFhCA==
-----END PRIVATE KEY-----



';
}