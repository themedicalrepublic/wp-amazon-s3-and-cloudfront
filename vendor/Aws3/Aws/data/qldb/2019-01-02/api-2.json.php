<?php

// This file was auto-generated from sdk-root/src/data/qldb/2019-01-02/api-2.json
return ['version' => '2.0', 'metadata' => ['apiVersion' => '2019-01-02', 'endpointPrefix' => 'qldb', 'jsonVersion' => '1.0', 'protocol' => 'rest-json', 'serviceAbbreviation' => 'QLDB', 'serviceFullName' => 'Amazon QLDB', 'serviceId' => 'QLDB', 'signatureVersion' => 'v4', 'signingName' => 'qldb', 'uid' => 'qldb-2019-01-02'], 'operations' => ['CancelJournalKinesisStream' => ['name' => 'CancelJournalKinesisStream', 'http' => ['method' => 'DELETE', 'requestUri' => '/ledgers/{name}/journal-kinesis-streams/{streamId}'], 'input' => ['shape' => 'CancelJournalKinesisStreamRequest'], 'output' => ['shape' => 'CancelJournalKinesisStreamResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ResourcePreconditionNotMetException']]], 'CreateLedger' => ['name' => 'CreateLedger', 'http' => ['method' => 'POST', 'requestUri' => '/ledgers'], 'input' => ['shape' => 'CreateLedgerRequest'], 'output' => ['shape' => 'CreateLedgerResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'ResourceAlreadyExistsException'], ['shape' => 'LimitExceededException'], ['shape' => 'ResourceInUseException']]], 'DeleteLedger' => ['name' => 'DeleteLedger', 'http' => ['method' => 'DELETE', 'requestUri' => '/ledgers/{name}'], 'input' => ['shape' => 'DeleteLedgerRequest'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ResourceInUseException'], ['shape' => 'ResourcePreconditionNotMetException']]], 'DescribeJournalKinesisStream' => ['name' => 'DescribeJournalKinesisStream', 'http' => ['method' => 'GET', 'requestUri' => '/ledgers/{name}/journal-kinesis-streams/{streamId}'], 'input' => ['shape' => 'DescribeJournalKinesisStreamRequest'], 'output' => ['shape' => 'DescribeJournalKinesisStreamResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ResourcePreconditionNotMetException']]], 'DescribeJournalS3Export' => ['name' => 'DescribeJournalS3Export', 'http' => ['method' => 'GET', 'requestUri' => '/ledgers/{name}/journal-s3-exports/{exportId}'], 'input' => ['shape' => 'DescribeJournalS3ExportRequest'], 'output' => ['shape' => 'DescribeJournalS3ExportResponse'], 'errors' => [['shape' => 'ResourceNotFoundException']]], 'DescribeLedger' => ['name' => 'DescribeLedger', 'http' => ['method' => 'GET', 'requestUri' => '/ledgers/{name}'], 'input' => ['shape' => 'DescribeLedgerRequest'], 'output' => ['shape' => 'DescribeLedgerResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'ResourceNotFoundException']]], 'ExportJournalToS3' => ['name' => 'ExportJournalToS3', 'http' => ['method' => 'POST', 'requestUri' => '/ledgers/{name}/journal-s3-exports'], 'input' => ['shape' => 'ExportJournalToS3Request'], 'output' => ['shape' => 'ExportJournalToS3Response'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'ResourcePreconditionNotMetException']]], 'GetBlock' => ['name' => 'GetBlock', 'http' => ['method' => 'POST', 'requestUri' => '/ledgers/{name}/block'], 'input' => ['shape' => 'GetBlockRequest'], 'output' => ['shape' => 'GetBlockResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ResourcePreconditionNotMetException']]], 'GetDigest' => ['name' => 'GetDigest', 'http' => ['method' => 'POST', 'requestUri' => '/ledgers/{name}/digest'], 'input' => ['shape' => 'GetDigestRequest'], 'output' => ['shape' => 'GetDigestResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ResourcePreconditionNotMetException']]], 'GetRevision' => ['name' => 'GetRevision', 'http' => ['method' => 'POST', 'requestUri' => '/ledgers/{name}/revision'], 'input' => ['shape' => 'GetRevisionRequest'], 'output' => ['shape' => 'GetRevisionResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ResourcePreconditionNotMetException']]], 'ListJournalKinesisStreamsForLedger' => ['name' => 'ListJournalKinesisStreamsForLedger', 'http' => ['method' => 'GET', 'requestUri' => '/ledgers/{name}/journal-kinesis-streams'], 'input' => ['shape' => 'ListJournalKinesisStreamsForLedgerRequest'], 'output' => ['shape' => 'ListJournalKinesisStreamsForLedgerResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ResourcePreconditionNotMetException']]], 'ListJournalS3Exports' => ['name' => 'ListJournalS3Exports', 'http' => ['method' => 'GET', 'requestUri' => '/journal-s3-exports'], 'input' => ['shape' => 'ListJournalS3ExportsRequest'], 'output' => ['shape' => 'ListJournalS3ExportsResponse']], 'ListJournalS3ExportsForLedger' => ['name' => 'ListJournalS3ExportsForLedger', 'http' => ['method' => 'GET', 'requestUri' => '/ledgers/{name}/journal-s3-exports'], 'input' => ['shape' => 'ListJournalS3ExportsForLedgerRequest'], 'output' => ['shape' => 'ListJournalS3ExportsForLedgerResponse']], 'ListLedgers' => ['name' => 'ListLedgers', 'http' => ['method' => 'GET', 'requestUri' => '/ledgers'], 'input' => ['shape' => 'ListLedgersRequest'], 'output' => ['shape' => 'ListLedgersResponse']], 'ListTagsForResource' => ['name' => 'ListTagsForResource', 'http' => ['method' => 'GET', 'requestUri' => '/tags/{resourceArn}'], 'input' => ['shape' => 'ListTagsForResourceRequest'], 'output' => ['shape' => 'ListTagsForResourceResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'ResourceNotFoundException']]], 'StreamJournalToKinesis' => ['name' => 'StreamJournalToKinesis', 'http' => ['method' => 'POST', 'requestUri' => '/ledgers/{name}/journal-kinesis-streams'], 'input' => ['shape' => 'StreamJournalToKinesisRequest'], 'output' => ['shape' => 'StreamJournalToKinesisResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ResourcePreconditionNotMetException']]], 'TagResource' => ['name' => 'TagResource', 'http' => ['method' => 'POST', 'requestUri' => '/tags/{resourceArn}'], 'input' => ['shape' => 'TagResourceRequest'], 'output' => ['shape' => 'TagResourceResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'ResourceNotFoundException']]], 'UntagResource' => ['name' => 'UntagResource', 'http' => ['method' => 'DELETE', 'requestUri' => '/tags/{resourceArn}'], 'input' => ['shape' => 'UntagResourceRequest'], 'output' => ['shape' => 'UntagResourceResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'ResourceNotFoundException']]], 'UpdateLedger' => ['name' => 'UpdateLedger', 'http' => ['method' => 'PATCH', 'requestUri' => '/ledgers/{name}'], 'input' => ['shape' => 'UpdateLedgerRequest'], 'output' => ['shape' => 'UpdateLedgerResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'ResourceNotFoundException']]]], 'shapes' => ['Arn' => ['type' => 'string', 'max' => 1600, 'min' => 20], 'Boolean' => ['type' => 'boolean'], 'CancelJournalKinesisStreamRequest' => ['type' => 'structure', 'required' => ['LedgerName', 'StreamId'], 'members' => ['LedgerName' => ['shape' => 'LedgerName', 'location' => 'uri', 'locationName' => 'name'], 'StreamId' => ['shape' => 'UniqueId', 'location' => 'uri', 'locationName' => 'streamId']]], 'CancelJournalKinesisStreamResponse' => ['type' => 'structure', 'members' => ['StreamId' => ['shape' => 'UniqueId']]], 'CreateLedgerRequest' => ['type' => 'structure', 'required' => ['Name', 'PermissionsMode'], 'members' => ['Name' => ['shape' => 'LedgerName'], 'Tags' => ['shape' => 'Tags'], 'PermissionsMode' => ['shape' => 'PermissionsMode'], 'DeletionProtection' => ['shape' => 'DeletionProtection']]], 'CreateLedgerResponse' => ['type' => 'structure', 'members' => ['Name' => ['shape' => 'LedgerName'], 'Arn' => ['shape' => 'Arn'], 'State' => ['shape' => 'LedgerState'], 'CreationDateTime' => ['shape' => 'Timestamp'], 'DeletionProtection' => ['shape' => 'DeletionProtection']]], 'DeleteLedgerRequest' => ['type' => 'structure', 'required' => ['Name'], 'members' => ['Name' => ['shape' => 'LedgerName', 'location' => 'uri', 'locationName' => 'name']]], 'DeletionProtection' => ['type' => 'boolean'], 'DescribeJournalKinesisStreamRequest' => ['type' => 'structure', 'required' => ['LedgerName', 'StreamId'], 'members' => ['LedgerName' => ['shape' => 'LedgerName', 'location' => 'uri', 'locationName' => 'name'], 'StreamId' => ['shape' => 'UniqueId', 'location' => 'uri', 'locationName' => 'streamId']]], 'DescribeJournalKinesisStreamResponse' => ['type' => 'structure', 'members' => ['Stream' => ['shape' => 'JournalKinesisStreamDescription']]], 'DescribeJournalS3ExportRequest' => ['type' => 'structure', 'required' => ['Name', 'ExportId'], 'members' => ['Name' => ['shape' => 'LedgerName', 'location' => 'uri', 'locationName' => 'name'], 'ExportId' => ['shape' => 'UniqueId', 'location' => 'uri', 'locationName' => 'exportId']]], 'DescribeJournalS3ExportResponse' => ['type' => 'structure', 'required' => ['ExportDescription'], 'members' => ['ExportDescription' => ['shape' => 'JournalS3ExportDescription']]], 'DescribeLedgerRequest' => ['type' => 'structure', 'required' => ['Name'], 'members' => ['Name' => ['shape' => 'LedgerName', 'location' => 'uri', 'locationName' => 'name']]], 'DescribeLedgerResponse' => ['type' => 'structure', 'members' => ['Name' => ['shape' => 'LedgerName'], 'Arn' => ['shape' => 'Arn'], 'State' => ['shape' => 'LedgerState'], 'CreationDateTime' => ['shape' => 'Timestamp'], 'DeletionProtection' => ['shape' => 'DeletionProtection']]], 'Digest' => ['type' => 'blob', 'max' => 32, 'min' => 32], 'ErrorCause' => ['type' => 'string', 'enum' => ['KINESIS_STREAM_NOT_FOUND', 'IAM_PERMISSION_REVOKED']], 'ErrorMessage' => ['type' => 'string'], 'ExportJournalToS3Request' => ['type' => 'structure', 'required' => ['Name', 'InclusiveStartTime', 'ExclusiveEndTime', 'S3ExportConfiguration', 'RoleArn'], 'members' => ['Name' => ['shape' => 'LedgerName', 'location' => 'uri', 'locationName' => 'name'], 'InclusiveStartTime' => ['shape' => 'Timestamp'], 'ExclusiveEndTime' => ['shape' => 'Timestamp'], 'S3ExportConfiguration' => ['shape' => 'S3ExportConfiguration'], 'RoleArn' => ['shape' => 'Arn']]], 'ExportJournalToS3Response' => ['type' => 'structure', 'required' => ['ExportId'], 'members' => ['ExportId' => ['shape' => 'UniqueId']]], 'ExportStatus' => ['type' => 'string', 'enum' => ['IN_PROGRESS', 'COMPLETED', 'CANCELLED']], 'GetBlockRequest' => ['type' => 'structure', 'required' => ['Name', 'BlockAddress'], 'members' => ['Name' => ['shape' => 'LedgerName', 'location' => 'uri', 'locationName' => 'name'], 'BlockAddress' => ['shape' => 'ValueHolder'], 'DigestTipAddress' => ['shape' => 'ValueHolder']]], 'GetBlockResponse' => ['type' => 'structure', 'required' => ['Block'], 'members' => ['Block' => ['shape' => 'ValueHolder'], 'Proof' => ['shape' => 'ValueHolder']]], 'GetDigestRequest' => ['type' => 'structure', 'required' => ['Name'], 'members' => ['Name' => ['shape' => 'LedgerName', 'location' => 'uri', 'locationName' => 'name']]], 'GetDigestResponse' => ['type' => 'structure', 'required' => ['Digest', 'DigestTipAddress'], 'members' => ['Digest' => ['shape' => 'Digest'], 'DigestTipAddress' => ['shape' => 'ValueHolder']]], 'GetRevisionRequest' => ['type' => 'structure', 'required' => ['Name', 'BlockAddress', 'DocumentId'], 'members' => ['Name' => ['shape' => 'LedgerName', 'location' => 'uri', 'locationName' => 'name'], 'BlockAddress' => ['shape' => 'ValueHolder'], 'DocumentId' => ['shape' => 'UniqueId'], 'DigestTipAddress' => ['shape' => 'ValueHolder']]], 'GetRevisionResponse' => ['type' => 'structure', 'required' => ['Revision'], 'members' => ['Proof' => ['shape' => 'ValueHolder'], 'Revision' => ['shape' => 'ValueHolder']]], 'InvalidParameterException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage'], 'ParameterName' => ['shape' => 'ParameterName']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'IonText' => ['type' => 'string', 'max' => 1048576, 'min' => 1, 'sensitive' => \true], 'JournalKinesisStreamDescription' => ['type' => 'structure', 'required' => ['LedgerName', 'RoleArn', 'StreamId', 'Status', 'KinesisConfiguration', 'StreamName'], 'members' => ['LedgerName' => ['shape' => 'LedgerName'], 'CreationTime' => ['shape' => 'Timestamp'], 'InclusiveStartTime' => ['shape' => 'Timestamp'], 'ExclusiveEndTime' => ['shape' => 'Timestamp'], 'RoleArn' => ['shape' => 'Arn'], 'StreamId' => ['shape' => 'UniqueId'], 'Arn' => ['shape' => 'Arn'], 'Status' => ['shape' => 'StreamStatus'], 'KinesisConfiguration' => ['shape' => 'KinesisConfiguration'], 'ErrorCause' => ['shape' => 'ErrorCause'], 'StreamName' => ['shape' => 'StreamName']]], 'JournalKinesisStreamDescriptionList' => ['type' => 'list', 'member' => ['shape' => 'JournalKinesisStreamDescription']], 'JournalS3ExportDescription' => ['type' => 'structure', 'required' => ['LedgerName', 'ExportId', 'ExportCreationTime', 'Status', 'InclusiveStartTime', 'ExclusiveEndTime', 'S3ExportConfiguration', 'RoleArn'], 'members' => ['LedgerName' => ['shape' => 'LedgerName'], 'ExportId' => ['shape' => 'UniqueId'], 'ExportCreationTime' => ['shape' => 'Timestamp'], 'Status' => ['shape' => 'ExportStatus'], 'InclusiveStartTime' => ['shape' => 'Timestamp'], 'ExclusiveEndTime' => ['shape' => 'Timestamp'], 'S3ExportConfiguration' => ['shape' => 'S3ExportConfiguration'], 'RoleArn' => ['shape' => 'Arn']]], 'JournalS3ExportList' => ['type' => 'list', 'member' => ['shape' => 'JournalS3ExportDescription']], 'KinesisConfiguration' => ['type' => 'structure', 'required' => ['StreamArn'], 'members' => ['StreamArn' => ['shape' => 'Arn'], 'AggregationEnabled' => ['shape' => 'Boolean']]], 'LedgerList' => ['type' => 'list', 'member' => ['shape' => 'LedgerSummary']], 'LedgerName' => ['type' => 'string', 'max' => 32, 'min' => 1, 'pattern' => '(?!^.*--)(?!^[0-9]+$)(?!^-)(?!.*-$)^[A-Za-z0-9-]+$'], 'LedgerState' => ['type' => 'string', 'enum' => ['CREATING', 'ACTIVE', 'DELETING', 'DELETED']], 'LedgerSummary' => ['type' => 'structure', 'members' => ['Name' => ['shape' => 'LedgerName'], 'State' => ['shape' => 'LedgerState'], 'CreationDateTime' => ['shape' => 'Timestamp']]], 'LimitExceededException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage'], 'ResourceType' => ['shape' => 'ResourceType']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'ListJournalKinesisStreamsForLedgerRequest' => ['type' => 'structure', 'required' => ['LedgerName'], 'members' => ['LedgerName' => ['shape' => 'LedgerName', 'location' => 'uri', 'locationName' => 'name'], 'MaxResults' => ['shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'max_results'], 'NextToken' => ['shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'next_token']]], 'ListJournalKinesisStreamsForLedgerResponse' => ['type' => 'structure', 'members' => ['Streams' => ['shape' => 'JournalKinesisStreamDescriptionList'], 'NextToken' => ['shape' => 'NextToken']]], 'ListJournalS3ExportsForLedgerRequest' => ['type' => 'structure', 'required' => ['Name'], 'members' => ['Name' => ['shape' => 'LedgerName', 'location' => 'uri', 'locationName' => 'name'], 'MaxResults' => ['shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'max_results'], 'NextToken' => ['shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'next_token']]], 'ListJournalS3ExportsForLedgerResponse' => ['type' => 'structure', 'members' => ['JournalS3Exports' => ['shape' => 'JournalS3ExportList'], 'NextToken' => ['shape' => 'NextToken']]], 'ListJournalS3ExportsRequest' => ['type' => 'structure', 'members' => ['MaxResults' => ['shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'max_results'], 'NextToken' => ['shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'next_token']]], 'ListJournalS3ExportsResponse' => ['type' => 'structure', 'members' => ['JournalS3Exports' => ['shape' => 'JournalS3ExportList'], 'NextToken' => ['shape' => 'NextToken']]], 'ListLedgersRequest' => ['type' => 'structure', 'members' => ['MaxResults' => ['shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'max_results'], 'NextToken' => ['shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'next_token']]], 'ListLedgersResponse' => ['type' => 'structure', 'members' => ['Ledgers' => ['shape' => 'LedgerList'], 'NextToken' => ['shape' => 'NextToken']]], 'ListTagsForResourceRequest' => ['type' => 'structure', 'required' => ['ResourceArn'], 'members' => ['ResourceArn' => ['shape' => 'Arn', 'location' => 'uri', 'locationName' => 'resourceArn']]], 'ListTagsForResourceResponse' => ['type' => 'structure', 'members' => ['Tags' => ['shape' => 'Tags']]], 'MaxResults' => ['type' => 'integer', 'max' => 100, 'min' => 1], 'NextToken' => ['type' => 'string', 'max' => 1024, 'min' => 4, 'pattern' => '^[A-Za-z-0-9+/=]+$'], 'ParameterName' => ['type' => 'string'], 'PermissionsMode' => ['type' => 'string', 'enum' => ['ALLOW_ALL']], 'ResourceAlreadyExistsException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage'], 'ResourceType' => ['shape' => 'ResourceType'], 'ResourceName' => ['shape' => 'ResourceName']], 'error' => ['httpStatusCode' => 409], 'exception' => \true], 'ResourceInUseException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage'], 'ResourceType' => ['shape' => 'ResourceType'], 'ResourceName' => ['shape' => 'ResourceName']], 'error' => ['httpStatusCode' => 409], 'exception' => \true], 'ResourceName' => ['type' => 'string'], 'ResourceNotFoundException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage'], 'ResourceType' => ['shape' => 'ResourceType'], 'ResourceName' => ['shape' => 'ResourceName']], 'error' => ['httpStatusCode' => 404], 'exception' => \true], 'ResourcePreconditionNotMetException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage'], 'ResourceType' => ['shape' => 'ResourceType'], 'ResourceName' => ['shape' => 'ResourceName']], 'error' => ['httpStatusCode' => 412], 'exception' => \true], 'ResourceType' => ['type' => 'string'], 'S3Bucket' => ['type' => 'string', 'max' => 255, 'min' => 3, 'pattern' => '^[A-Za-z-0-9-_.]+$'], 'S3EncryptionConfiguration' => ['type' => 'structure', 'required' => ['ObjectEncryptionType'], 'members' => ['ObjectEncryptionType' => ['shape' => 'S3ObjectEncryptionType'], 'KmsKeyArn' => ['shape' => 'Arn']]], 'S3ExportConfiguration' => ['type' => 'structure', 'required' => ['Bucket', 'Prefix', 'EncryptionConfiguration'], 'members' => ['Bucket' => ['shape' => 'S3Bucket'], 'Prefix' => ['shape' => 'S3Prefix'], 'EncryptionConfiguration' => ['shape' => 'S3EncryptionConfiguration']]], 'S3ObjectEncryptionType' => ['type' => 'string', 'enum' => ['SSE_KMS', 'SSE_S3', 'NO_ENCRYPTION']], 'S3Prefix' => ['type' => 'string', 'max' => 128, 'min' => 0], 'StreamJournalToKinesisRequest' => ['type' => 'structure', 'required' => ['LedgerName', 'RoleArn', 'InclusiveStartTime', 'KinesisConfiguration', 'StreamName'], 'members' => ['LedgerName' => ['shape' => 'LedgerName', 'location' => 'uri', 'locationName' => 'name'], 'RoleArn' => ['shape' => 'Arn'], 'Tags' => ['shape' => 'Tags'], 'InclusiveStartTime' => ['shape' => 'Timestamp'], 'ExclusiveEndTime' => ['shape' => 'Timestamp'], 'KinesisConfiguration' => ['shape' => 'KinesisConfiguration'], 'StreamName' => ['shape' => 'StreamName']]], 'StreamJournalToKinesisResponse' => ['type' => 'structure', 'members' => ['StreamId' => ['shape' => 'UniqueId']]], 'StreamName' => ['type' => 'string', 'max' => 32, 'min' => 1, 'pattern' => '(?!^.*--)(?!^[0-9]+$)(?!^-)(?!.*-$)^[A-Za-z0-9-]+$'], 'StreamStatus' => ['type' => 'string', 'enum' => ['ACTIVE', 'COMPLETED', 'CANCELED', 'FAILED', 'IMPAIRED']], 'TagKey' => ['type' => 'string', 'max' => 128, 'min' => 1], 'TagKeyList' => ['type' => 'list', 'member' => ['shape' => 'TagKey'], 'max' => 200, 'min' => 0], 'TagResourceRequest' => ['type' => 'structure', 'required' => ['ResourceArn', 'Tags'], 'members' => ['ResourceArn' => ['shape' => 'Arn', 'location' => 'uri', 'locationName' => 'resourceArn'], 'Tags' => ['shape' => 'Tags']]], 'TagResourceResponse' => ['type' => 'structure', 'members' => []], 'TagValue' => ['type' => 'string', 'max' => 256, 'min' => 0], 'Tags' => ['type' => 'map', 'key' => ['shape' => 'TagKey'], 'value' => ['shape' => 'TagValue'], 'max' => 200, 'min' => 0], 'Timestamp' => ['type' => 'timestamp'], 'UniqueId' => ['type' => 'string', 'max' => 22, 'min' => 22, 'pattern' => '^[A-Za-z-0-9]+$'], 'UntagResourceRequest' => ['type' => 'structure', 'required' => ['ResourceArn', 'TagKeys'], 'members' => ['ResourceArn' => ['shape' => 'Arn', 'location' => 'uri', 'locationName' => 'resourceArn'], 'TagKeys' => ['shape' => 'TagKeyList', 'location' => 'querystring', 'locationName' => 'tagKeys']]], 'UntagResourceResponse' => ['type' => 'structure', 'members' => []], 'UpdateLedgerRequest' => ['type' => 'structure', 'required' => ['Name'], 'members' => ['Name' => ['shape' => 'LedgerName', 'location' => 'uri', 'locationName' => 'name'], 'DeletionProtection' => ['shape' => 'DeletionProtection']]], 'UpdateLedgerResponse' => ['type' => 'structure', 'members' => ['Name' => ['shape' => 'LedgerName'], 'Arn' => ['shape' => 'Arn'], 'State' => ['shape' => 'LedgerState'], 'CreationDateTime' => ['shape' => 'Timestamp'], 'DeletionProtection' => ['shape' => 'DeletionProtection']]], 'ValueHolder' => ['type' => 'structure', 'members' => ['IonText' => ['shape' => 'IonText']], 'sensitive' => \true]]];
