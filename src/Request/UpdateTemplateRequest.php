<?php namespace Aliyun\MTS\Request;

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

use Aliyun\Core\RpcAcsRequest;

class UpdateTemplateRequest extends RpcAcsRequest
{

    private $ownerId;

    private $resourceOwnerAccount;

    private $resourceOwnerId;

    private $templateId;

    private $name;

    private $container;

    private $video;

    private $audio;

    private $muxConfig;

    private $transConfig;

    private $ownerAccount;


    public function  __construct()
    {
        parent::__construct("Mts", "2014-06-18", "UpdateTemplate");
    }


    public function getOwnerId()
    {
        return $this->ownerId;
    }


    public function setOwnerId($ownerId)
    {
        $this->ownerId                    = $ownerId;
        $this->queryParameters["OwnerId"] = $ownerId;
    }


    public function getResourceOwnerAccount()
    {
        return $this->resourceOwnerAccount;
    }


    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->resourceOwnerAccount                    = $resourceOwnerAccount;
        $this->queryParameters["ResourceOwnerAccount"] = $resourceOwnerAccount;
    }


    public function getResourceOwnerId()
    {
        return $this->resourceOwnerId;
    }


    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->resourceOwnerId                    = $resourceOwnerId;
        $this->queryParameters["ResourceOwnerId"] = $resourceOwnerId;
    }


    public function getTemplateId()
    {
        return $this->templateId;
    }


    public function setTemplateId($templateId)
    {
        $this->templateId                    = $templateId;
        $this->queryParameters["TemplateId"] = $templateId;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name                    = $name;
        $this->queryParameters["Name"] = $name;
    }


    public function getContainer()
    {
        return $this->container;
    }


    public function setContainer($container)
    {
        $this->container                    = $container;
        $this->queryParameters["Container"] = $container;
    }


    public function getVideo()
    {
        return $this->video;
    }


    public function setVideo($video)
    {
        $this->video                    = $video;
        $this->queryParameters["Video"] = $video;
    }


    public function getAudio()
    {
        return $this->audio;
    }


    public function setAudio($audio)
    {
        $this->audio                    = $audio;
        $this->queryParameters["Audio"] = $audio;
    }


    public function getMuxConfig()
    {
        return $this->muxConfig;
    }


    public function setMuxConfig($muxConfig)
    {
        $this->muxConfig                    = $muxConfig;
        $this->queryParameters["MuxConfig"] = $muxConfig;
    }


    public function getTransConfig()
    {
        return $this->transConfig;
    }


    public function setTransConfig($transConfig)
    {
        $this->transConfig                    = $transConfig;
        $this->queryParameters["TransConfig"] = $transConfig;
    }


    public function getOwnerAccount()
    {
        return $this->ownerAccount;
    }


    public function setOwnerAccount($ownerAccount)
    {
        $this->ownerAccount                    = $ownerAccount;
        $this->queryParameters["OwnerAccount"] = $ownerAccount;
    }

}