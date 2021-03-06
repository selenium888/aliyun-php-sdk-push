<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace Selenium888\Aliyun\Push\Push\Request\V20160801;

class ModifyAppExtensionsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Push", "2016-08-01", "ModifyAppExtensions");
	}

	private  $appKey;

	private  $xmAppSecretKey;

	private  $hwAppKey;

	private  $hwAppSecretKey;

	public function getAppKey() {
		return $this->appKey;
	}

	public function setAppKey($appKey) {
		$this->appKey = $appKey;
		$this->queryParameters["AppKey"]=$appKey;
	}

	public function getXmAppSecretKey() {
		return $this->xmAppSecretKey;
	}

	public function setXmAppSecretKey($xmAppSecretKey) {
		$this->xmAppSecretKey = $xmAppSecretKey;
		$this->queryParameters["XmAppSecretKey"]=$xmAppSecretKey;
	}

	public function getHwAppKey() {
		return $this->hwAppKey;
	}

	public function setHwAppKey($hwAppKey) {
		$this->hwAppKey = $hwAppKey;
		$this->queryParameters["HwAppKey"]=$hwAppKey;
	}

	public function getHwAppSecretKey() {
		return $this->hwAppSecretKey;
	}

	public function setHwAppSecretKey($hwAppSecretKey) {
		$this->hwAppSecretKey = $hwAppSecretKey;
		$this->queryParameters["HwAppSecretKey"]=$hwAppSecretKey;
	}
	
}