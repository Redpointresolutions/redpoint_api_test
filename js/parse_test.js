var example = '{"api_token":"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJpYXQiOjE2MTkwMTU5MDMsImp0aSI6IjdTVXNmekgrTXdFWmJBNUhGT2k3ZkE9PSIsImlzcyI6ImFwaS5yZWRwb2ludHRyYXZlbHByb3RlY3Rpb24uY29tIiwibmJmIjoxNjE5MDE1OTAzLCJleHAiOjE2MTkwMTk1MDMsImRhdGEiOnsiYWdlbnRfdXNlcm5hbWUiOiJ0ZXN0QGFjY291bnQuY29tIiwiYWdlbnRfZmlsdGVyIjoidGVzdF9hY2NvdW50In19.n1N_abWbGxY-F2MS3p_CsBdMUvIyPnG36cJjTP-IbnS80ItgB_SaE_H3fwPUA0W1S_621Da4ckC7u6C_qFDLwA"}';

let obj = JSON.parse(example);

console.log( obj.api_token );