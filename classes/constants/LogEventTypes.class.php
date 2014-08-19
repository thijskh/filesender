<?php

/*
 * FileSender www.filesender.org
 * 
 * Copyright (c) 2009-2014, AARNet, Belnet, HEAnet, SURFnet, UNINETT
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 * 
 * *	Redistributions of source code must retain the above copyright
 * 	notice, this list of conditions and the following disclaimer.
 * *	Redistributions in binary form must reproduce the above copyright
 * 	notice, this list of conditions and the following disclaimer in the
 * 	documentation and/or other materials provided with the distribution.
 * *	Neither the name of AARNet, Belnet, HEAnet, SURFnet and UNINETT nor the
 * 	names of its contributors may be used to endorse or promote products
 * 	derived from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS 'AS IS'
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE
 * FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
 * DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
 * SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
 * OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

/**
 * Class containing all tags (constants) for audit logs
 */
class LogEventTypes extends Enum {
    /* GENERAL */
   const UPLOAD                 = 'upload';
   const FAILED                 = 'failed';
   const DOWNLOAD               = 'download';
   const UPLOADED               = 'uploaded';
   const LOG_CREATED            = 'log_created';
   
   /* USER */
   const USER_ACTIVATED         = 'user_activated';
   const USER_INACTIVE          = 'user_inactive';
   const USER_PURGED            = 'user_purged';
   
   /* FILE */
   const FILE_UPDATED           = 'file_updated';
   const FILE_EXPIRED           = 'file_expired';
   const FILE_MOVED             = 'file_moved';
   const FILE_DELETED           = 'file_deleted';
   
   /* GUESTVOUCHER */
   const GUESTVOUCHER_CREATED   = 'guestvoucher_created';
   const GUESTVOUCHER_SENT      = 'guestvoucher_sent';
   const GUESTVOUCHER_USED      = 'guestvoucher_used';
   const GUESTVOUCHER_EXPIRED   = 'guestvoucher_expired';
   const GUESTVOUCHER_CANCEL    = 'guestvoucher_cancel';
   const GUESTVOUCHER_CLOSED    = 'guestvoucher_closed';
   
   /* TRANSFER */
   const TRANSFER_START         = 'transfer_start';
   const TRANSFER_EXPIRED       = 'transfer_expired';
   const TRANSFER_CLOSED        = 'transfer_closed';
   const TRANSFER_DELETED       = 'transfer_deleted';
   
   /* UPLOAD */
   const UPLOAD_START           = 'upload_start';
   const UPLOAD_END             = 'upload_end';
   
   /* DOWNLOAD */
   const DOWNLOAD_START         = 'download_start';
   const DOWNLOAD_END           = 'download_end';
   const DOWNLOAD_RESUME        = 'download_resume';
   
}