var conf = {};

// Log file location
conf.log = "kiwi.log";


// If set, the client may only connect to this 1 IRC server
conf.restrict_server_channel = "#dogmazic";
conf.restrict_server_nick = "mlo_";




/*
 * Do not ammend the below lines unless you understand the changes!
 */
module.exports.production = conf;
