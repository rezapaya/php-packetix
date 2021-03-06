<?php namespace PacketiX\Protocol;

use \PacketiX\VPNException;

function check_error($pack) {
  if (array_key_exists('error', $pack)) {
    $strerr = strerror(Detail\lookup($pack, 'error'));
    throw new VPNException("error detected ($strerr)");
  }
  return $pack;
}

function strerror($errno) {
  switch ($errno) {
  case 0: return 'No error';
  case 1: return 'Connection failed';
  case 2: return 'Not VPN Server';
  case 3: return 'Disconnected';
  case 4: return 'Protocol error';
  case 5: return 'Not VPN Client';
  case 6: return 'User cancel';
  case 7: return 'Specified auth-type is not supported';
  case 8: return 'Hub not found';
  case 9: return 'Authentication failed';
  case 10: return 'Hub stopping';
  case 11: return 'Session removed';
  case 12: return 'Access denied';
  case 13: return 'Session timeout';
  case 14: return 'Invalid protocol';
  case 15: return 'Too many connections';
  case 16: return 'Hub is busy';
  case 17: return 'Proxy connection failed';
  case 18: return 'Proxy error';
  case 19: return 'Proxy authentication failed';
  case 20: return 'Too many user sessions';
  case 21: return 'License error';
  case 22: return 'Device driver error';
  case 23: return 'Internal error';
  case 24: return 'Secure device open failed';
  case 25: return 'Secure PIN login failed';
  case 26: return 'No Cert';
  case 27: return 'No private key';
  case 28: return 'Write failed';
  case 29: return 'Object not found';
  case 30: return 'Vlan already exists';
  case 31: return 'Install vlan error';
  case 32: return 'Invalid vlan name';
  case 33: return 'Not supported';
  case 34: return 'Account already exists';
  case 35: return 'Account active';
  case 36: return 'Account not found';
  case 37: return 'Account inactive';
  case 38: return 'Invalid parameter';
  case 39: return 'Secure device error';
  case 40: return 'No secure device specified';
  case 41: return 'Vlan is used';
  case 42: return 'Vlan for account not found';
  case 43: return 'Vlan for account already used';
  case 44: return 'Vlan for account disabled';
  case 45: return 'Invalid values';
  case 46: return 'Not farm controller';
  case 47: return 'Trying to connect';
  case 48: return 'Connect to farm controller';
  case 49: return 'Create Hub on farm failed';
  case 50: return 'Cannot administer hub on farm member';
  case 51: return 'Null password refused';
  case 52: return 'Permission denied';
  case 53: return 'Listener not found';
  case 54: return 'Listener already exists';
  case 55: return 'Not farm member';
  case 56: return 'Cipher not supported';
  case 57: return 'Hub already exists';
  case 58: return 'Too many Hubs';
  case 59: return 'Link alread exists';
  case 60: return 'Cannot create link on farm';
  case 61: return 'Link is offline';
  case 62: return 'Too many access lists';
  case 63: return 'Too many users';
  case 64: return 'Too many groups';
  case 65: return 'Group not found';
  case 66: return 'User already exists';
  case 67: return 'Group already exists';
  case 68: return 'Invalid user auth-type';
  case 69: return 'Old password wrong';
  case 73: return 'Cannot disconnect the link';
  case 74: return 'Account not present';
  case 75: return 'Already online';
  case 76: return 'Offline';
  case 77: return 'Not RSA-1024';
  case 78: return 'Cannot disconnect the SecureNAT sessions';
  case 79: return 'SecureNAT requires standalone mode';
  case 80: return 'SecureNAT not running';
  case 82: return 'Cannot disconnect the bridge';
  case 83: return 'Local bridge stopping';
  case 84: return 'Local bridge not supported';
  case 85: return 'Cert not trusted';
  case 86: return 'Invalid product code';
  case 87: return 'Invalid version';
  case 88: return 'Adding capture device failed';
  case 89: return 'Invalid VPN code';
  case 90: return 'Capture device not found';
  case 91: return 'Cannot disconnect L3 sessions';
  case 92: return 'L3 switch already exists';
  case 93: return 'L3 switch not found';
  case 94: return 'Invalid name';
  case 95: return 'Adding L3 interface failed';
  case 96: return 'Deleting L3 interface failed';
  case 97: return 'L3 interface already exists';
  case 98: return 'Adding L3 table failed';
  case 99: return 'Deleting L3 table failed';
  case 100: return 'L3 table already exists';
  case 101: return 'Bad clock';
  case 102: return 'Cannot start L3 switch';
  case 103: return 'Client licenses not enough';
  case 104: return 'Bridge licenses not enough';
  case 105: return 'Cannot accept';
  case 106: return 'Server Cert is expired';
  case 107: return 'Monitor mode denied';
  case 108: return 'Bridge mode denied';
  case 109: return 'IP address denied';
  case 110: return 'Too many items';
  case 111: return 'Memory allocation failed';
  case 112: return 'Object already exists';
  case 113: return 'Fatal error';
  case 114: return 'Server license failed';
  case 115: return 'No internet connectivity';
  case 116: return 'Client license failed';
  case 117: return 'Bad command or param';
  case 118: return 'Invalid license key';
  case 119: return 'No VPN Server license';
  case 120: return 'No VPN Cluster license';
  case 121: return 'Not Administrator Pack licesned server';
  case 122: return 'Not Administrator Pack Licensed server (.NET)';
  case 123: return 'Beta license is expired';
  case 124: return 'Branded C to S';
  case 125: return 'Branded C from S';
  case 126: return 'Auto disconnected';
  case 127: return 'Client ID not mached';
  case 128: return 'Too many users created';
  case 129: return 'Subscription is older';
  case 130: return 'Not supported auth-type on UT-VPN';
  case 131: return 'Not supported feature on UT-VPN';
  default: return "Unknown($errno)";
  }
}
